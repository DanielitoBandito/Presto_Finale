<x-layout>

    <div class="mx-auto card shadow-lg" style=" width: 50%; ; margin-top: 50px ">
        <div >
            <div class="card">
                <div class="card-header">
                    <h4>Registrazione</h4>
                </div>
                <div class="card-body">
                    <form action="/register" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" class="form-input-rg" value="{{ old('name') }}" placeholder="Es. Mario Rossi">
                            @error('name')
                                <p class="fst-italic text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-input-rg" value="{{ old('email') }}"  placeholder="Es. Mariorossi@gmail.com">
                            @error('email')
                                <p class="fst-italic text-danger">{{ $message }}</p>
                            @enderror
                            
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-input-rg" placeholder="Inserisci una password">
                            @error('password')
                                <p class="fst-italic text-danger">{{ $message }}</p>
                            @enderror
                            
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Conferma Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-input-rg" placeholder="Conferma la tua password">
                            @error('password_confirmation')
                                <p class="fst-italic text-danger">{{ $message }}</p>
                            @enderror
                           
                        </div>
                        <div class="form-group mt-4 text-center">
                            <input type="submit" value="Registrati" class="btn btn-rg">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout>