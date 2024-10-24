<x-layout>

    <div class="col-12 col-md-8 mx-auto">
        @auth
            <div class="my-5 text-center">
                <div class="container">
                    <a href="{{ route('article.create') }}"
                        class="btn btn-lg add_article_btn">{{ __('ui.Crea Nuovo Articolo') }}</a>
                </div>
            </div>
        @endauth



        <div class="row height-custom justify-content-center align-items-center py-3 mx-4">
            @forelse ($articles as $article)
                <div class="col-12 col-md-4">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">{{ __('ui.Non sono ancora stati creati articoli.') }}</h3>
                </div>
            @endforelse


        </div>
    </div>






</x-layout>
