<x-layout>
    <form action="/login" method="post">
        @csrf

        <label for="email">Email</label>
        <input class="form-control" type="email" placeholder="email" name="email" value="{{ old('email') }}">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="password">Password</label>
        <input class="form-control" type="password" placeholder="password" name="password">
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit">Accedi</button>


    </form>

</x-layout>
