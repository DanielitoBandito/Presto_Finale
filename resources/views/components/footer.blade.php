<footer class="footer text-white py-2 text-center">

    @auth
        @if (!Auth::user()->is_revisor)
            <a href="{{route('revisor.question')}}" class="log-btn fs-5">Lavora con Noi!</a>
        @endif
    @endauth

    <h5>©2024 GARD.it | Privacy Policy</h5>

</footer>

