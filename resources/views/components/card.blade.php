<div class="article-card">
    <img src="{{ $article->images->count() > 0 ? $article->images->first()->getUrl() : '/images/logo-color-edited.png' }}"
        alt="Immagine dell'articolo {{ $article->title }}" class="card-img-top" style="height: 150px; width: 100%; object-fit: contain;">
    <div class="article-details" style="height: 250px; overflow-y: auto; padding: 10px;">
        <h2 class="article-name text-truncate">{{ $article->title }}</h2>
        <p class="article-description text-truncate">{{ $article->description }}</p>
        <p class="article-price">€ {{ $article->price }}</p>
        <div class="article-buttons">
            <a href="{{ route('article.show', compact('article')) }}" class="detail-button">{{ __('ui.Dettaglio')}}</a>
            <a href="{{ route('byCategory', ['category' => $article->category]) }}"
                class="category-button text-capitalize">{{ $article->category->name }}</a>
        </div>
    </div>
</div>

