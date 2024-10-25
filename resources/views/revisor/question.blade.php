{{-- DOMANDA FORM REVISOR --}}
<x-layout>
    <div class="container d-flex mx-auto my-4 justify-content-center align-items-center">
        <h1>{{__('ui.Lavora con Noi!')}}</h1>
    </div>
    <div class="container d-flex mx-auto justify-content-center align-items-center">

        @if (session()->has('message'))

        <div class="container d-flex mx-auto justify-content-center align-items-center">
            <div class="row ">
                <div class="col alert alert-success text-center-shadow rounded w-auto text-truncate">
                    {{ session('message') }}
                    <a href="{{ route('home.index') }}" class="btn btn-lg add_article_btn">{{__("ui.Torna all'homepage")}}</a>
                </div>
            </div>

        </div>
        @else
        <form class="col-md-6 shadow p-3 " method="POST" action="{{ route('become.revisor') }}">
            @csrf
            <div class="mb-3">
                <label for="question" class="p-2 fs-5">
                    <p style="display: inline; color: red;">* </p style="color: black">{{__('ui.Perchè vuoi diventare Revisor?')}}
                </label>
                <textarea name="question" id="question" cols="15" rows="6"
                    class="form-input-add @error('question') is-invalid @enderror" placeholder="Domanda.."></textarea>
                @error('question')
                <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn add_article_btn_fr w-100 mb-3">{{__('ui.Invia!')}}</button>
            </div>
            <p style="display: inline; color: white;">-{{__('ui.I campi contrassegnati dal simbolo (*) sono obbligatori')}}</p>
        </form>
        @endif
    </div>


</x-layout>