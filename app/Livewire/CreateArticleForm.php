<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Livewire\Attributes\Validate;
use Monolog\Handler\IFTTTHandler;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CreateArticleForm extends Component
{
    #[Validate('required| min:5 | max:45')]
    public $title;
    #[Validate('required| min:20| max:150')]
    public $description;
    #[Validate('required| numeric')]
    public $price;
    #[Validate('required')]
    public $category;
    public $article;
    public $images=[];
    public $temporary_images;

    public function store()
    {
        $this->validate();
        $this->article = Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category,
            'user_id' => Auth::id()
        ]);

        if(count($this->images) > 0) {
            foreach ($this->images as $image) {
                $newFileName = "articles/{$this->article->id}";
                $newImage = $this->article->images()->create(['path' => $image->store($newFileName, 'public')]);
                //dispatch(new ResizeImage($newImage->path, 300, 300));
                //dispatch(new GoogleVisionSafeSearch($newImage->id));
                //dispatch(new GoogleVisionLabelImage($newImage->id));
                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 800, 800),
                    new ResizeImage($newImage->path, 1200, 1200),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);
            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

        session()->flash('success', 'Articolo creato correttamente');
        $this->cleanForm();
    }

    use WithFileUploads;



    public function render()
    {
        return view('livewire.create-article-form');
    }

    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*' => 'image|max:1024',
            'temporary_images' => 'max:6',
        ]))
        {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key){
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    public function cleanForm(){
        $this->title = '';
        $this->description = '';
        $this->price = '';
        $this->category = '';
        $this->images = [];
    }
}
