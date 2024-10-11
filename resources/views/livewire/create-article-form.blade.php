<form class="form_art shadow p-4 my-3 " wire:submit="store">

    @if (session()->has('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif


    <div class="mb-3">
        <label for="title" class="article-add">Titolo:</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" wire:model.blur="title" placeholder="Inserisci il titolo">
        @error('title')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="article-add">Descrizione:</label>
        <textarea id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror" wire:model.blur="description" placeholder="Inserisci la descrizione"></textarea>
        @error('description')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="article-add">Prezzo:</label>
        <input type="number" step="0.01" class="mb-4 form-control @error('price') is-invalid @enderror" id="price" wire:model.blur='price' placeholder="Inserisci il prezzo">
        @error('price')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="category" class="article-add">Categoria:</label>
        <select id="category" wire:model.blur="category" class="fs-5 form-control @error('category') is-invalid @enderror">
            <option  value="" label >Seleziona una categoria:</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name}}</option>
            @endforeach
        </select>
        @error('category')
            <p class="error-message">{{ $message }}</p>
        @enderror
    </div>
    
    

    <div class="d-flex justify-content-center">
        <button type="submit" class="btn add_article_btn_fr w-100">Crea</button>
    </div>
    
    
</form>