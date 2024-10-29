<x-layout>
    <div class="row  ">
        <x-aside_hp />

        <div class="col-md-10 col-12">
            <div class="row py-3 justify-content-center align-items-center text-center">
                <div class="col-12 w-75">
                    <h3 class="display-5 deco-title bg-body-secondary"> {{ __('ui.Risultati per la Ricerca')}}
                        "<span class="fst-italic">{{ $query }}</span>"
                    </h3>
                </div>
            </div>
            <div class="row height-custom justify-content-center align-items-center py-1">
                @forelse ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-card :article="$article" />
                </div>
                @empty
                <div class="col-12">
                    <h1 class="text-center"> {{ __('ui.Nessun articolo corrisponde alla tua ricerca.' )}}
                    </h1>
                </div>
                @endforelse
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div>
                {{ $articles->links() }}
            </div>
        </div>
    </div>





</x-layout>