<x-main>
    <div class="text-center my-2">
        articles.index
    </div>

    <div class="container my-2">
        @if(session()->has('article'))
            <div class="alert alert-success text-center">
                {{session('article')}}
            </div>
        @endif
    </div>

    <livewire:article-index-list /> 
</x-main>