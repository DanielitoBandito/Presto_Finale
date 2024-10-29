<x-layout>

    <div class="container-fluid">
        <div class="row">
            <x-aside_hp />


            <div class="col-12 col-md-10">
                <div class="row mt-2 justify-content-center align-items-center text-center">
                    <div class="col-12 w-50">
                        <h1 class="display-5 deco-title bg-body-secondary ">{{ __('ui.Categoria') }}:
                            <span class="text-capitalize">{{ __("ui.$category->name") }}</span>
                        </h1>
                    </div>
                </div>
                <div class="row height-custom justify-content-center align-items-center py-2">
                    @forelse ($articles as $article)
                    <div class="col-12 col-md-3">
                        <x-card :article="$article" />
                    </div>
                    @empty
                    <div class="col-12 text-center">
                        <h3> {{ __('ui.Non sono ancora stati creati articoli.') }}</h3>
                        @auth
                        <a href="{{ route('article.create') }}" class="btn btn-dark my-5">
                            {{ __('ui.Crea Nuovo Articolo') }}</a>
                        @endauth
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

</x-layout>