<div class="row d-lg-none mb-4 mx-auto">
    <div class="col-12 d-flex justify-content-between align-items-center">
        <div class="col-auto">
            <a href="" class="previous link-prev-next">&laquo; Previous</a>
        </div>
        <form class="d-flex d-lg-none searchbar-mobile mx-auto align-items-center justify-content-center" role="search"
            action="{{ route('article.search') }}" method="GET">
            <div class="input-group justify-content-center mb-2 ">
                <input name="query" class="form-search" type="search" placeholder="{{ __('ui.Cerca') }}" aria-label="Search">
                <button class="btn btn-src" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 18">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg>
                </button>
            </div>
        </form>

        <div class="col-auto">
            <a href="" class="next link-prev-next">Next &raquo;</a>
        </div>
    </div>




    <style>
        .link-prev-next {
            text-decoration: none;
            display: inline-block;
            padding: 8px 16px;
        }

        .link-prev-next:hover {
            background-color: #ddd;
            color: black;
        }

        .previous {
            background-color: #f1f1f1;
            color: black;
        }

        .next {
            background-color: #04AA6D;
            color: white;
        }
    </style>
</div>

