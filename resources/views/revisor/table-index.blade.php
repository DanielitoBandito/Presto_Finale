<x-layout>
    <div class="container-fluid">
        <div class="row height-custom justify-content-center align-item-center text-center">
            <div class="col-12">
                <h1 class="display-1">
                    Articoli revisionati
                </h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center align item-center py-5">
            @forelse ($articles_checked as $article)
                <div class="col-12 col-md-4">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12 col-md-8">
                    <h3 class="text-center">
                        Non sono ancora stati revisionati articoli
                    </h3>
                </div>
            @endforelse
        </div>
    </div>
    {{-- <div class="d-flex justify-content-center">
        <div>
            {{ $articles_checked->links() }}
        </div>
    </div> --}}
</x-layout>
