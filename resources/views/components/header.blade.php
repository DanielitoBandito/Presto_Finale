<nav class="navbar navbar-expand-lg p-2">
    <div class="container-fluid">
        <h1 class="logo" onclick="location.href='/'" style="cursor: pointer; margin-top: 8px">PRESTO</h1>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <li class="nav-item mx-5"><a class="nav-link" href="{{ route('article.index') }}">Tutti</a></li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link-cat" role="button" data-bs-toggle="dropdown">Categorie</a>
                <ul class="dropdown-menu category">

                    @foreach ($categories as $category)
                        <li><a class="nav-link-list text-capitalize"
                                href="{{ route('byCategory', ['category' => $category]) }}">{{ $category->name }}</a>
                        </li>
                        @if (!$loop->last)
                            <hr class="dropdown-divider">
                        @endif
                    @endforeach

                </ul>
            </li>
            
                @auth
                @if (Auth::user()->is_revisor)
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-success btn-sm position-relative w-sm-25" 
                    href="{{route('revisor.index')}}">Zona revisore</a>
                    <span 
                         class="position-relative top-0 start-100 translate-middle badge rounded-pill bg-danger">{{\App\Models\Article::toBeRevisedCount()}}
                    </span>
                </li>
                @endif
                @endauth
            







            <div class="row position-absolute end-0 pb-0">
                <form class="d-flex col-6 align-items-center justify-content-center" role="search"
                    action="{{ route('article.search') }}" method="GET">
                    <input name="query" class="form-control " type="search" placeholder="Cerca" aria-label="Search">
                    <button class="btn btn-src" type="submit" style="margin-right: 10px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 18">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>
                    </button>
                </form>

                <div class="col-5 p-0">
                    @if (!auth()->check())
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <div class="col-5">
                                <a href="/login" class="log-btn">ACCEDI</a>
                            </div>
                            <div class="col-6">
                                <a href="/register" class="btn-rg-hm">REGISTRATI</a>
                            </div>

                        </div>
                    @else
                        <div class="btn-group dropdown button m-1">
                            <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Ciao, {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item text-danger" href="#"
                                        onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                                    <form action="{{ route('logout') }}" method="post" class="d-none" id="form-logout">
                                        @csrf</form>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('article.create') }}">Crea</a>
                                </li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>


        </div>
    </div>
</nav>





