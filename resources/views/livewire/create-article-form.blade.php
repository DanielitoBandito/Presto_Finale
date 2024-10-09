<div>
    <form wire:submit="store" >
        Titolo<input type="text" class="form-control" wire.model="title" id="title">
        Prezzo<input type="text" class="form-control" wire.model="price" id="price">
        Descrizione<input type="text" class="form-control" wire.model="description" id="description">
        <select name="" id="category" wire:model="category" class="form-control mt-3">
            <option value="">Seleziona una categoria</option>

            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-primary mt-3">Crea</button>
    </form>

</div>
