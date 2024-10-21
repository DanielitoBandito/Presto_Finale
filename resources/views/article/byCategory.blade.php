<x-layout>

    <div class="container">
        <div class="row py-5 justify-content-center align-items-center text-center">
            <div class="col-12 pt-5">
                <h1 class="display-2 "> {{ __('ui.categoria') }}
            : <span class="text-capitalize">{{ $category->name }}</span>
                </h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center align-items-center py-5">

            @forelse ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12 text-center">
                    <h3> {{ __('ui.Non sono ancora stati creati articoli.') }}
                        
                    </h3>

                    @auth
                        <a href="{{ route('article.create') }}" class="btn btn-dark my-5"> {{__('ui.crea nuovo articolo') }}</a>
                    @endauth
                </div>
            @endforelse

        </div>
    </div>
</x-layout>
