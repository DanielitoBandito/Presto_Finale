<nav class="navbar navbar-expand-lg p-2">
    <div class="container-fluid">
        <!-- Logo "PRESTO" -->
        <h1 class="logo" onclick="location.href='/'" style="cursor: pointer;">PRESTO</h1>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse"  id="navbarSupportedContent">
            <!-- Links della navbar -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 " style="margin-left: 20px;">
                <li class="nav-item"><a class="nav-link" href="#">Donna</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Uomo</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Bambini</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Casa</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Elettronica</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Sport</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Profumi</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Animali</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Musica</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Cosmetici</a></li>
            </ul>

            <!-- Barra di ricerca -->
            <form class="d-flex" role="search">
                <input class="form-control" type="search" placeholder="Cerca" aria-label="Search">
                <button class="btn btn-src" type="submit" style="margin-right: 30px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 18">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                </svg>      
                </button>
            </form>
            

            <!-- Pulsanti Accedi e Registrati / Menu Utente -->
            <div>
                @if (!auth()->check())
                <div class="btn-group" role="group" aria-label="Basic example">
                    <div class="col-5">
                        <a href="/login" class="log-btn">ACCEDI/</a>
                    </div>
                    <div class="col-6" >
                        <a href="/register" class="btn-rg-hm">REGISTRATI</a>
                    </div>
                    
                </div>



                @else
                    <div class="btn-group dropdown m-1">
                        <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ciao, {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item text-danger" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                                <form action="{{ route('logout') }}" method="post" class="d-none" id="form-logout">@csrf</form>
                            </li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</nav>


