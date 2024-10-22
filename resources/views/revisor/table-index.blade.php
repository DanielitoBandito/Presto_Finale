<x-layout>
    <div class="container-fluid">
        <div class="row height-custom justify-content-center align-item-center text-center">
            <div class="col-12">
                <h1 class="display-1">
                    {{__('ui.Articoli revisionati')}}
                </h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center align item-center py-5">
            @forelse ($articles_checked as $article)
                @if ($article->user_id !== auth()->id())
                    <div class="col-12 col-md-4">
                        <div class="article-card">
                            <img src="/images/logo-color-edited.png" alt="Nome Articolo" class="article-image">
                            <div class="article-details">
                                <h2 class="article-name">{{ $article->title }}</h2>
                                <p class="article-description text-truncate">{{ $article->description }}</p>
                                <p class="article-price">€ {{ $article->price }}</p>
                                @if ($article->is_accepted == true)
                                    <p class="text-success">{{__("ui.L'articolo in precedenza revisionato è stato accettato")}}</p>
                                @else
                                    <p class="text-danger">{{__("ui.L'articolo in precedenza revisionato è stato rifiutato")}}</p>
                                @endif
                                <div class="article-buttons">
                                    <a href="{{route('revisor.undoLastAction', ['article' => $article->id])}}" class="detail-button">{{__('ui.Annulla Revisione')}}</a>                           
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @empty
                <div class="col-12 col-md-8">
                    <h3 class="text-center">
                        {{__('ui.Non sono ancora stati revisionati articoli')}}
                    </h3>
                </div>
            @endforelse
        </div>
    </div>
    {{-- <div class="d-flex justify-content-center">
        <div>
            {{ $articles_checked->links() }}
        </div>
    </div> --}}
</x-layout>
