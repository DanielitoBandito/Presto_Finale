<x-layout>
    <form action="/login" method="post">
        @csrf

        <label for="email">Email</label>
        <input class="form-control" type="email" placeholder="email" name="email">

        <label for="password">Password</label>
        <input class="form-control" type="password" placeholder="password" name="password">

        <button type="submit">Accedi</button>


    </form>

</x-layout>
