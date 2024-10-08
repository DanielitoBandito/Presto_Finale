<x-layout>

    <div class="row">
        <div class="col-xs-12">

            <form action="/register" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="password_confirmation">Conferma Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                </div>

                

                <br>
               
                
                <div class="form-group">
                    <input type="submit" value="Registrati" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</x-layout>