<x-layout>

    @auth
    <div class="my-5 text-center">
        <div class="container">
            <a href="/create" class="btn btn-lg" >Inserisci Nuovo Articolo</a>
        </div>
    </div>
    @endauth

    <section class="container">
        <div class="article-grid">
            <!-- Articolo 1 -->
            <div class="article-card col-4">
                <img src="https://via.placeholder.com/300x200" alt="Articolo 1" class="article-image">
                <h3 class="article-title">Articolo 1</h3>
                <p class="article-price">€49,99</p>
            </div>
        </div>
    </section>
    
    
</x-layout>