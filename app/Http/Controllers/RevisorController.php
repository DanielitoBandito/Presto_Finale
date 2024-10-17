<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;
use App\Models\ArticleAction;

class RevisorController extends Controller
{
    public function index(){
        $article_to_check = Article::where('is_accepted', null)->first();
        return view ('revisor.index', compact('article_to_check'));
    }

    public function accept(Article $article){
        $article->setAccepted(true);
        $this->logAction($article, 'accepted');
        return redirect()
        ->back()
        ->with('message' , "Hai accettato l'articolo $article->title");
    }

    public function reject(Article $article){
        $article->setAccepted(false);
        $this->logAction($article, 'rejected');
        return redirect()
        ->back()
        ->with('message' , "Hai rifiutato l'articolo $article->title");
    }

    private function logAction(Article $article, string $action){
        ArticleAction::create([
            'article_id' => $article->id,
            'action' => $action,
            'created_at' => now(),
        ]);
    }

    public function undoLastAction(){
        $lastAction = ArticleAction::orderBy('created_at', 'desc')->first();

        if ($lastAction) {
            $article = Article::find($lastAction->article_id);
            if ($lastAction->action === 'accepted') {
                $article->setAccepted(null); // Annulla l'accettazione
                $message = "Hai annullato l'accettazione dell'articolo $article->title";
            } else {
                $article->setAccepted(null); // Annulla il rifiuto
                $message = "Hai annullato il rifiuto dell'articolo $article->title";
            }
            $article->save();
            $lastAction->delete(); // Rimuovi l'azione loggata

            return redirect()
                ->back()
                ->with('message', $message);
        }

        return redirect()->back()->with('message', "Nessuna azione da annullare.");
    }

    public function table(){
        $articles_checked = Article::whereNotNull('is_accepted')->orderBy('created_at', 'desc')->take(6)->get();
        return view ('revisor.table-index', compact('articles_checked'));
    }




    public function becomeRevisor(Request $request){
        
        $dati=$request->validate([
            'question' => 'required|min:20',
        ]); 
        $question=$dati['question'];
        $user=Auth::user();

        Mail::to('admin@presto.it')->send(new BecomeRevisor($user, $question));
        return redirect()->route('revisor.question')->with('message', "Complimenti, Hai richiesto di diventare revisor! Ti invieremo una mail di conferma!");
    }

    public function makeRevisor(User $user){
        Artisan::call('app:make-user-revisor', ['email' => $user->email]);
        return redirect()->back();
    }


    public function requestQuestion(){
        return view('revisor.question');
    }

}
