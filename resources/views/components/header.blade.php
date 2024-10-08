<div style="width: 100%; height: 100px; background-color: rgb(0, 149, 182);  ">
</div>
<div class="navcustom">
    <div class="navLeft">
        <h1 style= "font-size:80px;">PRESTO</h1>
    </div>
    <div class="navRight">
        <a href="/login"  class="btnLogin">ACCEDI</a>
        <a href="/register" class="btnRegistrer">REGISTRATI</a>
    </div>


     @auth

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expandend ="false">
                ciao, {{Auth::user()->name}}
            </a>
            
            <ul class="dropdown-menu">
                <a class="dropdown-item" href="#" 
                    onclick="event.preventDefault();document.querySelector('#form-logout').submit(); ">Logout</a>

                
                <form action={{route('logout')}} method="post" class="d-none" id="form-logout">@csrf</form>

            </ul>
        </li>
    @else 
    @endauth
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


            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Cerca</button>
            </form>
        </div>
    </div>
</nav>