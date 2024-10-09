<nav class="navbar navbar-expand-lg bg-body-tertiary mt-1">
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
                <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search">
                <button class="btn btn-outline-success" type="submit" style="margin-right: 20px;">Cerca</button>
            </form>

            <!-- Pulsanti Accedi e Registrati / Menu Utente -->
            <div>
                @if (!auth()->check())
                    <div class="btn-group">
                        <a href="/login" class="btn btn-success">ACCEDI</a>
                        <a href="/register" class="btn btn-danger">REGISTRATI</a>
                    </div>
                @else
                    <div class="btn-group dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ciao, {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                                <form action="{{ route('logout') }}" method="post" class="d-none" id="form-logout">@csrf</form>
                            </li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</nav>





























<!-- <div style="width: 100%; height: 50px; background-color: rgb(0, 149, 182);  ">
</div>
<div style="flex-direction: row; display: flex; width: 100%;">
    <div>
        <h1 class="logo" onclick="location.href='/'">PRESTO</h1>
        
    </div>

    @if (!auth()->check())
        <div class="navRight">
            <a href="/login"  class="btn btn-success">ACCEDI</a>
            <a href="/register" class="btn btn-danger">REGISTRATI</a>
        </div>
    @else

        @auth
            <li class="btn btn-secondary" >
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expandend ="false">
                    Ciao, {{Auth::user()->name}}
                </a>
            
                <ul class="dropdown-menu ">
                    <li>
                        <a class="dropdown-item" href="#" 
                            onclick="event.preventDefault();document.querySelector('#form-logout').submit(); ">Logout
                        </a>
                
                        <form action={{route('logout')}} method="post" class="d-none" id="form-logout">@csrf</form>

                    </li>
                </ul>
            </li>
        @endauth

        
    @endif
</div>


<nav class="navbar navbar-expand-lg bg-body-tertiary mt-5 ">
    <div class="container-fluid">

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="#">Donna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Uomo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bambini</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Casa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Elettronica</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sport</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profumi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Animali</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Musica</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cosmetici</a>
                </li>


            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Cerca</button>
            </form>
        </div>
    </div>
</nav> -->