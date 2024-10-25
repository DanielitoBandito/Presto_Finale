<x-layout>
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2 d-none d-md-block aside mt-2">
                <h4>Categorie:</h4>
                <ul>
                    @foreach ($categories as $category)
                    <li class="nav-item">
                        <a class="nav-link-list text-capitalize"
                            href="{{ route('byCategory', ['category' => $category]) }}"> {{__("ui.$category->name")}} </a>
                    </li>
                    @if (!$loop->last)
                    <hr class="dropdown-divider">
                    @endif
                    @endforeach
                </ul>
            </div>



            <div class="col -12 col-md-10">
                <div class="row height-custom justify-content-center align-item-center text-center">
                    <div class="col-12 mt-2">
                        <h1 class="display-5"> {{ __('ui.Tutti gli articoli') }}
                        </h1>
                    </div>
                </div>
                <div class="row height-custom justify-content-center align item-center py-5">
                    @forelse ($articles as $article)
                    <div class="col-12 col-md-3">
                        <x-card :article="$article" />
                    </div>
                    @empty
                    <div class="col-12">
                        <h3 class="text-center" {{ __('ui.Non sono ancora stati creati articoli.')}}>
                        </h3>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>







    </div>

    </div>
    <div class="d-flex justify-content-center">
        <div>
            {{ $articles->links() }}
        </div>
    </div>
</x-layout>