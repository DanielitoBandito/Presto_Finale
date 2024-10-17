<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<div class="home-background">
    <div class="container">
        <div class="row">
            <div class="col-12" style="cursor: pointer">
                <img src="{{ asset('images/logo-color-edited.png') }}" alt="" onclick="location.href='/'"
                    class="custom-image-rg">
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Accedi</h4>
                    </div>
                    <div class="lg-card mx-auto p-4">
                        <form action="/login" method="post" style="max-width: 500px; margin: 0 auto;">
                            @csrf
                            <label for="email" style="color: rgb(0, 0, 0);">Email</label>
                            <input class="form-input-lg" style="margin-bottom: 10px, w-2rem" type="email"
                                placeholder="email" name="email" value="{{ old('email') }}">

                            @error('email')
                                <p class="error-message">{{ $message }}</p>
                            @enderror

                            <label for="password" style="color: rgb(0, 0, 0);" class="mt-2">Password</label>
                            <input class="form-input-lg" type="password" placeholder="password" name="password">

                            @error('password')
                                <p class="error-message">{{ $message }}</p>
                            @enderror

                            <div class="form-group mt-2 text-center">
                                <input type="submit" value="Accedi" class="btn btn-rg" style="margin-top: 10px">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
