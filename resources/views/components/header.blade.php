<nav class="navbar navbar-expand-lg p-2">
    <div class="container-fluid">
        <div class="col-md-1 col-3" style="cursor: pointer">
            <img src="{{ asset('images/logo-color-edited.png') }}" alt="" onclick="location.href='/'"
                class="custom-image">
        </div>



        <div class="col-md-1 collapse navbar-collapse" id="navbarSupportedContent">
            <li class="nav-item mx-auto"><a class="nav-link-cat text-capitalize" href="{{ route('article.index') }}">{{ __('ui.Naviga')}}</a></li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link-cat mx-auto text-capitalize" role="button" data-bs-toggle="dropdown">{{__('ui.Categorie')}}</a>
                <ul class="dropdown-menu category">

                    @foreach ($categories as $category)
                    <li>
                        <a class="nav-link-list text-capitalize"
                            href="{{ route('byCategory', ['category' => $category]) }}"> {{__("ui.$category->name")}} </a>
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

        <div class="dropdown">
            <button class=" dropdown-toggle-lang" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe-americas" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484q-.121.12-.242.234c-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"/>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                    <path d="M3.204 5h9.592L8 10.481zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659"/>
                  </svg>
            </button>
            <ul class="dropdown-menu dropdown-lang" aria-labelledby="dropdownMenuButton">
                <li><x-_locale lang="it" /></li>
                <li><x-_locale lang="en" /></li>
                <li><x-_locale lang="es" /></li>
            </ul>
        </div>


        <div class="col-md-1 p-0 mx-auto">

            @if (!auth()->check())
            <div class="container align-items-center text-center" role="group" aria-label="Basic example">
                <div class="col-md-12 justify-content-center align-items-center w-100">
                    <div class="mb-1 text-capitalize ">
                        <a href="/login" class="log-btn"> {{__('ui.Accedi')}}</a>
                    </div>
                    <div class="mb-1 text-capitalize ">
                        <a href="/register" class="btn-rg-hm"> {{__('ui.Registrati')}}</a>
                    </div>
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
                                @csrf
                            </form>
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