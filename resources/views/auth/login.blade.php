<x-layout>

    <div class="mx-auto card p-4 shadow-lg" style="background-color: #0095b6; width: 100%; max-width: 400px; margin-top: 50px ">
        <form action="/login" method="post" style="max-width: 500px; margin: 0 auto;" >
            @csrf
            <label for="email" style="color: white;">Email</label>
            <input class="form-input-lg" style="margin-bottom: 10px, width: 2rem" type="email" placeholder="email" name="email" value="{{ old('email') }}">
            @error('email')
                <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
            <label for="password" style="color: white;" class="mt-2">Password</label>
            <input class="form-input-lg" type="password" placeholder="password" name="password">
            @error('password')
                <p class="fst-italic text-danger">{{ $message }}</p>
            @enderror
            <div class="form-group mt-2 text-center">
                <input type="submit" value="Accedi" class="btn btn-rg" style="margin-top: 10px">
            </div>
        </form>
    </div>

</x-layout>