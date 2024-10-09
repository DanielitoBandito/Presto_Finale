<x-layout>
    <div class="mx-auto card p-4 shadow-lg" style="background-color: #0095b6; width: 100%; max-width: 500px; margin-top: 50px ">
        <form action="/login" method="post" style="max-width: 500px; margin: 0 auto;" >
            @csrf

            <label for="email">Email</label>
            <input class="form-control" type="email" placeholder="email" name="email" value="{{ old('email') }}">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="password">Password</label>
            <input class="form-control" type="password" placeholder="password" name="password" style="margin-bottom: 10px;">
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary">Accedi</button>


        </form>
    </div>
    

</x-layout>
