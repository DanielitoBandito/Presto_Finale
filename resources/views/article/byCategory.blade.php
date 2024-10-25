<x-layout>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 d-none d-md-block aside mt-2">
                <h4>{{ __('ui.Categorie') }}:</h4>
                <ul>
                    @foreach ($categories as $cat)
                        <li class="nav-item">
                            <a class="nav-link-list text-capitalize"
                                href="{{ route('byCategory', ['category' => $cat]) }}">
                                {{ __("ui.$cat->name") }} </a>
                        </li>
                        @if (!$loop->last)
                            <hr class="dropdown-divider">
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-12 col-md-10">
                <div class="row mt-2 justify-content-center align-items-center text-center">
                    <div class="col-12">
                        <h1 class="display-5 ">{{ __('ui.Categoria') }}:
                            <span class="text-capitalize">{{ __("ui.$category->name") }}</span>
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