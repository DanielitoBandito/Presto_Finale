<x-layout>

    <div class="container-fluid">
        <div class="row">
            <x-aside_hp />

            <div class="col-12 col-md-10">
                <div class="row height-custom justify-content-center align-item-center text-center">
                    <div class="col-12 w-50">
                        <h1 class="display-5 deco-title bg-body-secondary"> {{ __('ui.Tutti gli articoli') }}</h1>
                    </div>
                </div>
                <div class="row height-custom justify-content-center align item-center py-3">
                    @forelse ($articles as $article)
                    <div class="col-12 col-md-3">
                        <x-card :article="$article" />
                    </div>
                    @empty
                    <div class="col-12">
                        <h3 class="text-center" {{ __('ui.Non sono ancora stati creati articoli.')}}></h3>
                    </div>
                    @endforelse
                </div>

                <div class="d-flex justify-content-center">
                    <div>
                        {{ $articles->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>



</x-layout>