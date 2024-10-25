<x-layout>

<div class="container mt-5">

    <div class="row w-100 mt-3">
        <!-- Sezione Informazioni Articolo -->
        <div class="col-md-5 rounded shadow bg-body-secondary p-4">
            <!-- TITOLO -->
            <div class="mb-3">
                <h2 id="card_title" class="t-card-art">{{ __('ui.Titolo') }} <span class="fw-bold">:</span> {{ $article->title }}</h2>
            </div>
            
            <!-- DIVISORE -->
            <hr class="divider-vert my-4">

            <!-- DESCRIZIONE -->
            <div class="mb-3">
                <h5 class="d-card-art">{{ __('ui.Descrizione') }} :</h5>
                <p class="d-card-art">{{ $article->description }}</p>
            </div>

            <!-- DIVISORE -->
            <hr class="divider-vert my-4">

            <!-- PREZZO -->
            <div class="mb-3 text-center">
                <h4 class="p-card-art">{{ __('ui.Prezzo') }} : {{ $article->price }} €</h4>
            </div>
        </div>

        <!-- Divisore Centrale per Desktop -->
        <div class="col-12 col-md-1 d-none d-md-flex align-items-center justify-content-center">
            <div class="divider">
                <h1></h1>
            </div>
        </div>

        <!-- Carosello Immagini -->
        <div class="col-12 col-md-6">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    @foreach ($article->images as $key => $image)
                        <div class="carousel-item @if ($loop->first) active @endif">
                            <img src="{{ $image->getUrl() }}" class="d-block w-100 rounded shadow" alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>




</x-layout>