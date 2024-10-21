<x-layout>



    <div class="card-show mx-3 mt-5 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row justify-content-center height-custom align-items-center text-center">
                <div class="col-12 card-header">
                    <h1 class="display-4">
                        Dettaglio: {{ $article->title }}
                    </h1>
                </div>
            </div>
            <div id="show_card" class="row justify-content-center py-5">
                <div class="col-12 col-md-6 mb-3">
                    <div id="caroselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="#" class="d-block w-100 rounded shadow">
                            </div>
                            <div class="carousel-item">
                                <img src="#" class="d-block w-100 rounded shadow">
                            </div>
                            <div class="carousel-item">
                                <img src="#" class="d-block w-100 rounded shadow">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#caroselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#caroselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-3 text-center">
                    <h2 id="card_title" class="display-5 t-card-art"> {{ __('ui.titolo') }} <span class="fw-bold"> :
                        </span>{{ $article->title }}</h2>
                    <div class="d-flex justify-content-center flex-column" style="height: 85%;">
                        <h4 class="p-card-art" > {{ __('ui.prezzo') }} : {{ $article->price }} € </h4>
                        <h5 class="d-card-art" > {{ __('ui.descrizione') }} : </h5>
                        <h5 class="d-card-art">{{ $article->description }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-layout>
