<x-main>
    <h1 class="text-center">articles.create</h1>

    {{-- 
        @if (session('article'))
            <h1 class="text-center my-2">{{session('success')}}</h1>
        @endif
    --}}
    
    <livewire:article-create-form />
    
</x-main>