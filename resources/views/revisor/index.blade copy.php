<x-layout>
    <h1 style="text-align: center">{{__('ui.Articoli da revisionare')}}:</h1>

    <div class=" row pt-3 mb-auto mx-auto w-100 col-12">
        <div class="col-md-3">
            <aside class="aside">
                <div class="col-md-3 w-100">
                    <div class="art-rev">
                        <a href="{{ route('revisor.index') }}" class="fs-2 pb-2" style="text-decoration: none; color: black;">{{__('ui.Revisor dashboard')}} </a>
                    </div>

                    <div class=" art-rev">
                        <a href="{{ route('table.index') }}" class="fs-2 pb-2"
                            style="text-decoration: none; color: black;">{{__('ui.Articoli revisionati')}}</a>
                    </div>
                </div>
            </aside>
        </div>

        <div class="col-md-9">
            <div class="shadow bg-body-secondary rounded p-4">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="text-truncate">{{ $article_to_check->title }}</h2>
                        <h3>{{ __('ui.Autore') }}: {{ $article_to_check->user->name }}</h3>
                        <h4>{{ $article_to_check->price }} €</h4>
                        <h5 class="fst-italic text-muted">{{ $article_to_check->category->name }}</h5>
                        <p class="h6 text-truncate">{{ $article_to_check->description }}</p>
                    </div>

                    <div class="col-md-4 d-flex flex-column justify-content-end align-items-center gap-3">
                        <button cla>Dettaglio</button>
                        <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-danger fw-bold ">{{ __('ui.Rifiuta') }}</button>
                        </form>
                        <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-success fw-bold ">{{ __('ui.Accetta') }}</button>
                        </form>
                    </div>
                </div>
                @else
                <div class="row justify-content-center align-items-center text-center height-custom">
                    <div class="col-12">
                        <h1 class="fst-italic fs-2">{{ __('ui.Nessun articolo da revisionare') }}</h1>
                        <a href="{{ route('home.index') }}" class="mt-5 btn btn-success">{{ __("ui.Torna all'homepage") }}</a>
                    </div>
                </div>
                @endif

                @if (session()->has('message'))
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="alert alert-{{ session('status') }} fade show position-fixed top-3 start-50 translate-middle-x" role="alert" style="z-index: 1050;">
                            {{ session('message') }}
                        </div>
                    </div>
                </div>
                @endif

                
                @if ($article_to_check)
                <div class="row pt-5">
                    @foreach ($article_to_check->images as $key => $image)
                    <div class="col-md-3 col-lg-3 mb-4">
                        <div class="card shadow-sm">
                            <img src="{{ $image->getUrl() }}" class="card-img-top rounded" alt="Immagine {{ $key + 1 }} dell'articolo '{{ $article_to_check->title }}'">
                            <div class="card-body" style="text-align: center">
                                <h5 class="card-title">Labels</h5>
                                @if ($image->labels)
                                <p>
                                    @foreach ($image->labels as $label)
                                    #{{ $label }},
                                    @endforeach
                                </p>
                                @else
                                <p class="fst-italic text-muted">No labels</p>
                                @endif

                                <h5 class="mt-3">Ratings</h5>
                                @foreach (['adult', 'violence', 'spoof', 'racy', 'medical'] as $rating)
                                <div class="d-flex align-items-center my-2">
                                    <span class="badge bg-{{ $image->$rating ? 'danger' : 'secondary' }} mx-2"></span>
                                    <span>{{ $rating }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                
            </div>
        </div>
    </div>
</x-layout>




<!-- VECCHIO LAYOUT DETTAGLI -->
    <!-- <div class="col-md-9">
        <div class="shadow bg-body-secondary rounded ">
            @if ($article_to_check)
            <div class="row justify-content-center pt-5 w-100">
                <div class="col-md-8">
                    <div class="row justify-content-center">
                        @if ($article_to_check->images->count())
                        @foreach ($article_to_check->images as $key => $image)
                        <div class="col-6 col-md-4 mb-4">
                            <img src="{{ $image->getUrl(300, 300) }}" class="img-fluid rounded shadow"
                                alt="Immagine {{ $key + 1 }} dell'articolo '{{ $article_to_check->title }}'">
                        </div>
                        <div class="col-md-5 ps-3">
                            <div class="card-body">
                                <h5>Labels</h5>
                                @if ($image->labels)
                                @foreach ($image->labels as $label)
                                #{{ $label }},
                                @endforeach
                                @else
                                <p class="fst-italic">No labels</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-8 ps-3 pb-4">
                            <div class="card-body">
                                <h5 class="">Ratings</h5>
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{ $image->adult }}">
                                        </div>
                                    </div>
                                    <div class="col-10">adult</div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{ $image->violence }}">
                                        </div>
                                    </div>
                                    <div class="col-10">violence</div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{ $image->spoof }}">
                                        </div>
                                    </div>
                                    <div class="col-10">spoof</div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{ $image->racy }}">
                                        </div>
                                    </div>
                                    <div class="col-10">racy</div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <div class="text-center mx-auto {{ $image->medical }}">
                                        </div>
                                    </div>
                                    <div class="col-10">medical</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        @for ($i = 0; $i < 6; $i++)
                            <div class="col-6 col-md-4 mb-4 text-center">
                            <img src="/public/images/logo-color-edited.png"
                                class="img-fluid rounded shadow" alt="Immagine Segnaposto">
                    </div>
                    @endfor
                    @endif
                </div>
            </div>
            <div class="col-md-4 d-flex flex-column justify-content-between mx-auto pb-2">

                <div>
                    <h2 class="text-truncate">{{ $article_to_check->title }}</h2>
                    <h3>{{__('ui.Autore')}}: {{ $article_to_check->user->name }}</h3>
                    <h4>{{ $article_to_check->price }} €</h4>
                    <h4 class="fst-italic text-muted">{{ $article_to_check->category->name }}</h4>
                    <p class="h6 text-truncate">{{ $article_to_check->description }}</p>
                </div>
                <div class="d-flex row pb-4 ">
                    <div class="col-6 col-md-6">
                        <form action="{{ route('reject', ['article' => $article_to_check]) }}"
                            method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-danger py-2 fw-bold w-100">{{__('ui.Rifiuta')}}</button>
                        </form>
                    </div>
                    <div class="col-6 col-md-6">
                        <form action="{{ route('accept', ['article' => $article_to_check]) }}"
                            method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-success py-2 fw-bold w-100">{{__('ui.Accetta')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="row justify-content-center align-items-center height-custom text-center">
            <div class="col-12">
                <h1 class="fst-italic fs-2">{{__('ui.Nessun articolo da revisionare')}}</h1>
                <a href="{{ route('home.index') }}" class="mt-5 btn btn-success">{{__("ui.Torna all'homepage")}}</a>
            </div>
        </div>


        @endif

        <div class="row">
            @if (session()->has('message'))
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="alert alert-{{ session('status') }} fade show position-fixed top-3 start-50 translate-middle-x"
                        role="alert" style="z-index: 1050;">
                        {{ session('message') }}
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div> -->




<!-- VECCHIO LAYOUT PAGINA -->
    <!-- 
    <h1 style="text-align: center">{{__('ui.Articoli da revisionare')}}:</h1>

    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="title_rev ">
                    <h1 class="fs-2 text-center pb-2"> {{__('ui.Revisor dashboard')}}</h1>
                </div>

                <div class=" art-rev">
                    <a href="{{ route('table.index') }}" class="fs-2 pb-2"
                        style="text-decoration: none; color: black;">{{__('ui.Articoli revisionati')}}</a>
                </div>
            </div>

            <div class="col">

            </div>



            <div class="col-md-6 shadow bg-body-secondary">
                @if ($article_to_check)
                <div class="row justify-content-center pt-5">
                    <div class="col-md-8">
                        <div class="row justify-content-center">
                            @if ($article_to_check->images->count())
                            @foreach ($article_to_check->images as $key => $image)
                            <div class="col-6 col-md-4 mb-4">
                                <img src="{{ $image->getUrl(300, 300) }}" class="img-fluid rounded shadow"
                                    alt="Immagine {{ $key + 1 }} dell'articolo '{{ $article_to_check->title }}'">
                            </div>
                            <div class="col-md-5 ps-3">
                                <div class="card-body">
                                    <h5>Labels</h5>
                                    @if ($image->labels)
                                    @foreach ($image->labels as $label)
                                    #{{ $label }},
                                    @endforeach
                                    @else
                                    <p class="fst-italic">No labels</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-8 ps-3">
                                <div class="card-body">
                                    <h5 class="">Ratings</h5>
                                    <div class="row justify-content-center">
                                        <div class="col-2">
                                            <div class="text-center mx-auto {{ $image->adult }}">
                                            </div>
                                        </div>
                                        <div class="col-10">adult</div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-2">
                                            <div class="text-center mx-auto {{ $image->violence }}">
                                            </div>
                                        </div>
                                        <div class="col-10">violence</div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-2">
                                            <div class="text-center mx-auto {{ $image->spoof }}">
                                            </div>
                                        </div>
                                        <div class="col-10">spoof</div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-2">
                                            <div class="text-center mx-auto {{ $image->racy }}">
                                            </div>
                                        </div>
                                        <div class="col-10">racy</div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-2">
                                            <div class="text-center mx-auto {{ $image->medical }}">
                                            </div>
                                        </div>
                                        <div class="col-10">medical</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            @for ($i = 0; $i < 6; $i++)
                                <div class="col-6 col-md-4 mb-4 text-center">
                                <img src="/public/images/logo-color-edited.png"
                                    class="img-fluid rounded shadow" alt="Immagine Segnaposto">
                        </div>
                        @endfor
                        @endif
                    </div>
                </div>
                <div class="col-md-4 ps-4 d-flex flex-column justify-content-between">

                    <div>
                        <h2 class="text-truncate">{{ $article_to_check->title }}</h2>
                        <h3>{{__('ui.Autore')}}: {{ $article_to_check->user->name }}</h3>
                        <h4>{{ $article_to_check->price }} €</h4>
                        <h4 class="fst-italic text-muted">{{ $article_to_check->category->name }}</h4>
                        <p class="h6 text-truncate">{{ $article_to_check->description }}</p>
                    </div>
                    <div class="d-flex container pb-4 justify-content-around">
                        <div class="col-6 col-md-4">
                            <form action="{{ route('reject', ['article' => $article_to_check]) }}"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-danger py-2 fw-bold">{{__('ui.Rifiuta')}}</button>
                            </form>
                        </div>
                        <div class="col-6 col-md-4">
                            <form action="{{ route('accept', ['article' => $article_to_check]) }}"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-success py-2 fw-bold">{{__('ui.Accetta')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="row justify-content-center align-items-center height-custom text-center">
                <div class="col-12">
                    <h1 class="fst-italic fs-2">{{__('ui.Nessun articolo da revisionare')}}</h1>
                    <a href="{{ route('home.index') }}" class="mt-5 btn btn-success">{{__("ui.Torna all'homepage")}}</a>
                </div>
            </div>


            @endif

            <div class="row">
                @if (session()->has('message'))
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="alert alert-{{ session('status') }} fade show position-fixed top-3 start-50 translate-middle-x"
                            role="alert" style="z-index: 1050;">
                            {{ session('message') }}
                        </div>
                    </div>
                </div>
                @endif
            </div>


        </div>

        <div class="col">

        </div>

    </div>


    </div> -->






<script>
    document.addEventListener('DOMContentLoaded', function() {
        let alert = document.querySelector('.alert');
        if (alert) {
            setTimeout(() => {
                alert.classList.remove('show');
            }, 2000);
        }
    });
</script>