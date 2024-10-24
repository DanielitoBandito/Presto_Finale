<form class=" col-10 col-md-6 form_art p-3 " wire:submit="store">

    @if (session()->has('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}!
        </div>
    @endif

    <div class="mb-3 form">
        <label for="title" class="article-add">
            <p style="display: inline; color: red;">* </p>{{ __('ui.Titolo') }}:
        </label>
        <input type="text" class="form-input-add @error('title') is-invalid @enderror" id="title"
            wire:model.blur="title" placeholder="Inserisci il titolo (min 5 caratteri)">
        @error('title')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="article-add">
            <p style="display: inline; color: red;">* </p>{{ __('ui.Descrizione') }}:
        </label>
        <textarea id="description" cols="20" rows="6"
            class="form-input-add @error('description') is-invalid @enderror" wire:model.blur="description"
            placeholder="Inserisci la descrizione (min 20 caratteri)"></textarea>
        @error('description')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>

    <div class="row">
        <div class="mb-3 col-md-6">
            <label for="" class="article-add">
                <p style="display: inline; color: red;">* </p>{{ __('ui.Prezzo') }}:
            </label>
            <input type="number" step="0.1" class="form-input-add @error('price') is-invalid @enderror"
                id="price" wire:model.blur='price' placeholder="Inserisci il prezzo">
            @error('price')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3 col-md-6">
            <label for="category" class="article-add">
                <p style="display: inline; color: red;">* </p>{{ __('ui.Categoria') }}:
            </label>
            <select id="category" wire:model.blur="category"
                class=" form-input-add @error('category') is-invalid @enderror">
                <option value="" label>{{ __('ui.Seleziona una categoria') }}:</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ __("ui.$category->name") }}</option>
                @endforeach
            </select>
            @error('category')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
    </div>



    <div class="row">

        <div class="mb-3 col-md-12">
            <input type="file" class="add_image" wire:model.live="temporary_images"
                multiple @error('temporary_images') is-invalid @enderror placeholder="Inserisci un'immagine">
            @error('temporary_images.*')
                <p class="error-message">{{ $message }}</p>
            @enderror
            @error('temporary_images')
                <p class="error-message">{{ $message }}</p>
            @enderror

        </div>


        @if (count($images) > 0)

            <div class="col-12 col-md-6">
                <p>Anteprima</p>
                <div class="row border border-4 border-success rounded shadow py-4">
                    @foreach ($images as $key => $image)
                        <div class="col d-flex flex-column align-items-center my-3">
                            <div class="img-preview mx-auto shadow rounded"
                                style="background-image: url('{{ $image->temporaryUrl() }}');">
                            </div>
                            <button type="button" class="btn btn-danger"
                                wire:click="removeImage({{ $key }})">X</button>
                        </div>
                    @endforeach
                </div>
            </div>

        @endif
    </div>







    <div class="d-flex justify-content-center">
        <button type="submit" class="btn add_article_btn_fr w-100 mb-3">Crea</button>
    </div>

    <p style="display: inline; color: white;">- I campi contrassegnati dal simbolo (*) sono obbligatori.</p>
    <br>
    <p style="display: inline; color: white;">- Il revisore sarà notificato, solo quando verrà accettato sarà possibile
        visualizzarlo in Home.</p>

</form>
