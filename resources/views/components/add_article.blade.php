<div class="position-absolute bottom-50 start-50 translate-middle" style="z-index: 1050">
    @auth
        <div class="my-5 text-center">
            <div class="container">
                <a href="{{ route('article.create') }}"
                    class="btn btn-lg btn-dark shadow">{{ __('ui.Crea Nuovo Articolo') }}</a>
            </div>
        </div>
    @endauth
</div>