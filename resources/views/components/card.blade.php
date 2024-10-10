<div class="card mx-auto card-w shadow text-center mb-3">
    <img src="" alt="">
    <div class="card-body">
        <h4 class="card-title">{{ $article->title }}</h4>
        <p class="card-description">{{ $article->description }}</p>
        <div class="d-flex justify-content-evenly align-items-center">
            <h6 class="card-subtitle text-body-secondary">{{ $article->price }} €</h6>
            <h6 class="card-subtitle text-body-secondary">{{ $article->category->name }}</h6>

        </div>

        <div class="d-flex justify-content-evenly align-items-center mt-5">
            <a href="#" class="btn btn-primary">Dettaglio</a>
            <a href="#" class="btn btn-outline-info">Categoria</a>
        </div>
    </div>
</div>