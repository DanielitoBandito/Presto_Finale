<x-layout>
    

    <div class="mx-auto card p-4 shadow-lg" style="background-color: #0095b6; width: 100%; max-width: 400px; margin-top: 50px ">
        <form action="/login" method="post" style="max-width: 500px; margin: 0 auto;" >
            @csrf

            <label for="email" style="color: white;">Email</label>
            <input class="form-input-lg" style="margin-bottom: 10px, width: 2rem" type="email" placeholder="email" name="email" value="{{ old('email') }}">
            <x-form-errors />

            <label for="password" style="color: white;" class="mt-2">Password</label>
            <input class="form-input-lg" type="password" placeholder="password" name="password" style="margin-bottom: 10px;">
            <x-form-errors />

            <div class="form-group mt-2 text-center">
                <input type="submit" value="Accedi" class="btn btn-rg ">
            </div>

        </form>
    </div>
    

</x-layout>
