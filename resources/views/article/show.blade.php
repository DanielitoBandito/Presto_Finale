<x-layout>

<div class="container mt-3 mb-3">

    <div class="row w-100 mt-3">
        <!-- Sezione Informazioni Articolo -->
        <div class="col-md-5 rounded shadow bg-body-secondary p-4">
            <!-- TITOLO -->
            <div class="mb-3">
                <h1 id="card_title" class="t-card-art text-center">{{ $article->title }}</h1>
            </div>
            
            <!-- DIVISORE -->
            <hr class="divider-vert my-4">

            <!-- DESCRIZIONE -->
            <div class="mb-3">
                <h3 class="d-card-art">{{ __('ui.Descrizione') }}:</h3>
                <p class="d-card-art">{{ $article->description }}</p>
            </div>

            <!-- DIVISORE -->
            <hr class="divider-vert my-4">

            <!-- PREZZO -->
            <div class="mb-3">
                <h3 class="p-card-art">{{ __('ui.Prezzo') }}: {{ $article->price }} €</h3>
            </div>
        </div>

        <!-- Divisore Centrale per Desktop -->
        <div class="col-12 col-md-1 d-none d-md-flex align-items-center justify-content-center">
            <div class="divider">
                <h1></h1>
            </div>
        </div>

        <!-- Carosello Immagini -->
        <div class="col-12 col-md-6 mt-3 mt-md-0">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    @foreach ($article->images as $key => $image)
                        <div class="carousel-item @if ($loop->first) active @endif">
                            <img src="{{ $image->getUrl() }}" class="d-block w-100 rounded shadow" alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}">
                        </div>
                    @endforeach
                </div>

                <div style="background-color: black; opacity: 0.5; ">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                </div>
                
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>




</x-layout>