<x-layout>

    <div class="home-background">
        <div class="content">
            @auth
                <div class="my-5 text-center">
                    <div class="container">
                        <a href="{{ route('article.create') }}" class="btn btn-lg add_article_btn">Inserisci Nuovo Articolo</a>
                    </div>
                </div>
            @endauth
        
    
        
            <div class="row height-custom justify-content-center align-items-center py-5 mx-4">
                @forelse ($articles as $article)
                    <div class="col-12 col-md-4">
                        <x-card :article="$article" />
                    </div>
                @empty
                    <div class="col-12">
                        <h3 class="text-center">Non sono ancora stati creati articoli</h3>
                    </div>
                @endforelse
        
        
            </div>  
        </div>
    </div>
    

    



</x-layout>
