<div>
    @auth
        <div class=" text-center">
            <div class="container">
                <a href="{{ route('article.create') }}"
                    class="btn btn-lg btn-primary shadow">{{ __('ui.Crea Nuovo Articolo') }}</a>
            </div>
        </div>
    @endauth
</div>