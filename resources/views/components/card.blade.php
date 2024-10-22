<div class="article-card">
    <img src="{{ $article->images->count() > 0 ? Storage::url($article->images->first()->path) : '/images/logo-color-edited.png' }}"
        alt="Immagine dell'articolo {{ $article->title }}" class="card-img-top img-fluid" style="height: 200px; object-fit: contain;">
    <div class="article-details">
        <h2 class="article-name">{{ $article->title }}</h2>
        <p class="article-description text-truncate">{{ $article->description }}</p>
        <p class="article-price">€ {{ $article->price }}</p>
        <div class="article-buttons">
            <a href="{{ route('article.show', compact('article')) }}" class="detail-button">{{ __('ui.Dettaglio')}}</a>
            <a href="{{ route('byCategory', ['category' => $article->category]) }}"
                class="category-button text-capitalize">{{ $article->category->name }}</a>
        </div>
    </div>
</div>
