<form class="form_art shadow p-3 " wire:submit="store">

    @if (session()->has('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}!
        </div>
    @endif





    <div class="mb-3 form">
        <label for="title" class="article-add">
            <p style="display: inline; color: red;">* </p>Titolo:
        </label>
        <input type="text" class="form-input-add @error('title') is-invalid @enderror" id="title"
            wire:model.blur="title" placeholder="Inserisci il titolo (min 5 caratteri)">
        @error('title')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>
    
    <div class="mb-3">
        <label for="description" class="article-add">
            <p style="display: inline; color: red;">* </p>Descrizione:
        </label>
        <textarea id="description" cols="20" rows="6"
            class="form-input-add @error('description') is-invalid @enderror" wire:model.blur="description"
            placeholder="Inserisci la descrizione (min 20 caratteri)"></textarea>
        @error('description')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="" class="article-add">
            <p style="display: inline; color: red;">* </p>Prezzo:
        </label>
        <input type="number" step="0.1" class="form-input-add @error('price') is-invalid @enderror" id="price"
            wire:model.blur='price' placeholder="Inserisci il prezzo">
        @error('price')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="category" class="article-add">
            <p style="display: inline; color: red;">* </p>Categoria:
        </label>
        <select id="category" wire:model.blur="category"
            class="fs-5 form-input-add @error('category') is-invalid @enderror">
            <option value="" label>Seleziona una categoria:</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn add_article_btn_fr w-100 mb-3">Crea</button>
    </div>
    <p style="display: inline; color: white;">- I campi contrassegnati dal simbolo (*) sono obbligatori.</p>
    <br>
    <p style="display: inline; color: white;">-Il revisore sarà notificato, solo qunado verrà accettato sarà possibile visualizzarlo in Home.</p>


</form>
