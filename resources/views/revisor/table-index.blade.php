<x-layout>
    <div class="container-fluid">
        <div class="row height-custom justify-content-center align-item-center text-center">
            <div class="col-12">
                <h1 class="display-1">
                    Articoli revisionati
                </h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center align item-center py-5">
            @forelse ($articles_checked as $article)
                <div class="col-12 col-md-4">
                    <div class="article-card">
                        <img src="/images/logo-color-edited.png" alt="Nome Articolo" class="article-image">
                        <div class="article-details">
                            <h2 class="article-name">{{ $article->title }}</h2>
                            <p class="article-description text-truncate">{{ $article->description }}</p>
                            <p class="article-price">€ {{ $article->price }}</p>
                            <div class="article-buttons">
                                @if ($article->user_id !== auth()->id())
                                    <a href="{{route('revisor.undoLastAction', ['article' => $article->id])}}" class="detail-button">Annulla Revisione</a>                           
                                @else
                                    <p class="bg-danger text-white">La revisione del tuo articolo può essere annullata solo da un altro revisore</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 col-md-8">
                    <h3 class="text-center">
                        Non sono ancora stati revisionati articoli
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
