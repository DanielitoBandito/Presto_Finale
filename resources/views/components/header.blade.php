<nav class="navbar navbar-expand-lg p-2">
    <div class="container-fluid">
        <div class="col-md-1 col-3" style="cursor: pointer">
            <img src="{{ asset('images/logo-color-edited.png') }}" alt="" onclick="location.href='/'"
                class="custom-image">
        </div>



        <div class="col-md-1 collapse navbar-collapse" id="navbarSupportedContent">
            <li class="nav-item mx-auto"><a class="nav-link-cat" href="{{ route('article.index') }}">{{ __('ui.Tutti')}}</a></li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link-cat mx-auto" role="button" data-bs-toggle="dropdown">{{__('ui.Categorie')}}</a>
                <ul class="dropdown-menu category">

                    @foreach ($categories as $category)
                        <li>
                            <a class="nav-link-list text-capitalize"
                                href="{{ route('byCategory', ['category' => $category]) }}">{{__("ui.$category->name")}}
                            </a>
                        </li>
                        @if (!$loop->last)
                            <hr class="dropdown-divider">
                        @endif
                    @endforeach

                </ul>
            </li>

            <form class="col-md-9  d-flex mx-auto align-items-center justify-content-center" role="search"
                action="{{ route('article.search') }}" method="GET">
                <div class="input-group">
                    <input name="query" class="form-search" type="search" placeholder="{{ __('ui.Cerca') }}" aria-label="Search">
                    <button class="btn btn-src" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 18">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>
                    </button>
                </div>

            </form>
           
        </div>
        <div>
                
            <x-_locale lang="it"/>
            <x-_locale lang="en"/>
            <x-_locale lang="es"/>

        </div>
        <div class="col-md-1 p-0 mx-auto">
          
            @if (!auth()->check())
                <div class="btn-group" role="group" aria-label="Basic example">
                    <div class="col-5">
                        <a href="/login" class="log-btn"> {{__('ui.Accedi')}}</a>
                    </div>
                    <div class="col-6">
                        <a href="/register" class="btn-rg-hm" > {{__('ui.Registrati')}}</a>
                    </div>

                </div>
            @else
                <div class="btn-group dropdown button m-1">
                    <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ __('ui.Ciao')}}, {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('article.create') }}">{{ __('ui.Crea Articolo') }}</a>
                        </li>
                        @if (Auth::user()->is_revisor == true)
                            <li>
                                <a class="dropdown-item" href="{{ route('revisor.index') }}">{{ __('ui.Revisore') }}
                                    <span class="badge rounded-pill bg-danger">
                                        {{ \App\Models\Article::toBeRevisedCount() }}</span></a>
                            </li>
                        @endif
                        <li>
                            <a class="dropdown-item text-danger" href="#"
                                onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">{{ __('ui.Logout') }}</a>
                            <form action="{{ route('logout') }}" method="post" class="d-none" id="form-logout">
                                @csrf</form>
                        </li>
                    </ul>
                </div>
            @endif
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>



    </div>
</nav>
