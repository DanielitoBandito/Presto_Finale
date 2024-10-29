<div class="col-md-2 d-none d-md-block aside mt-2 bg-body-secondary" style="max-height: 50%;">
    <h4>{{ __('ui.Categorie') }}:</h4>
    <ul>
        @foreach ($categories as $category)
        <li class="nav-item">
            <a class="nav-link-list text-capitalize"
                href="{{ route('byCategory', ['category' => $category]) }}"> {{__("ui.$category->name")}} </a>
        </li>
        @if (!$loop->last)
        <hr class="dropdown-divider">
        @endif
        @endforeach
    </ul>
</div>