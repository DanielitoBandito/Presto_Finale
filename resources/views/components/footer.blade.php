<footer class="footer text-white py-2 text-center" >
    <h5>©2024 GARD.it | Privacy Policy</h5>

    @auth
    <div class="mx-auto col-md-6 offset-md-1 my-5 text-center">
        <h5>Vuoi diventare revisore?</h5>
        <p>Cliccando il bottone sottostante farai richiesta al nostro admin</p>

        <a href="{{ route('become.revisor') }}" class="btn btn-success">diventa revisore</a>
    </div>
    @endauth

</footer>