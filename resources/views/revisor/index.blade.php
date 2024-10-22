<x-layout>

    <h1 style="text-align: center">{{__('ui.Articoli da revisionare')}}:</h1>

    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="rounded shadow bg-body-secondary">
                    <h1 class="fs-2 text-center pb-2"> {{__('ui.Revisor dashboard')}}</h1>
                </div>

                <div class="rounded shadow bg-body-secondary text-center">
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
                                            <img src="{{ Storage::url($image->path) }}" class="img-fluid rounded shadow"
                                                alt="Immagine {{ $key + 1 }} dell'articolo '{{ $article_to_check->title }}'">
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


    </div>


</x-layout>




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
