{{-- <div class="card shadow text-center mb-3">
    <img src="" alt="">
    <div class="card-body ">
        <h4 class="card-title color-white">{{ $article->title }}</h4>
        <p class="card-description text-truncate">{{ $article->description }}</p>
        <h6 class="card-price ">{{ $article->price }} €</h6>


        <div class="d-flex justify-content-evenly align-items-center mt-5">
            <a href="{{ route('article.show', compact('article')) }}" class="detail-button">Dettaglio</a>
            <a href="{{ route('byCategory', ['category' => $article->category]) }}"
                class="category-button text-capitalize">{{ $article->category->name }}</a>
        </div>
    </div>
</div> --}}

<div class="article-card">
    <img src="/images/logo-color-edited.png" alt="Nome Articolo" class="article-image">
    <div class="article-details">
        <h2 class="article-name">{{ $article->title }}</h2>
        <p class="article-description text-truncate">{{ $article->description }}</p>
        <p class="article-price">€ {{ $article->price }}</p>
        <div class="article-buttons">
            <a href="{{ route('article.show', compact('article')) }}" class="detail-button">Dettaglio</a>
            <a href="{{ route('byCategory', ['category' => $article->category]) }}"
                class="category-button text-capitalize">{{ $article->category->name }}</a>
        </div>
    </div>
</div>
