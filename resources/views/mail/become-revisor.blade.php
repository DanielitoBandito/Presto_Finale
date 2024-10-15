
    <div>
        <h1> Un utente ha chiesto di lavorare con noi</h1>
        <h2>Ecco i suoi dati:</h2>
        <p>Nome: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>se vuoi renderl* revisor, clicca qui:</p>
        <a href="{{ route('make.revisor', compact('user')) }}">Rendi revisor</a>
    </div>
