<div class="mt-5 p-4 container shadow">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session()->has('article'))
        <div class="alert alert-success text-center">
            {{session('article')}}
        </div>
    @endif

    <!-- Rispetto al form del create il metodo di riferimento sarà update e non store  -->
    <form wire:submit.prevent="update">
    @csrf

        <div class="mb-3">
            <label for="input-title" class="form-label">Title</label>
            <!-- wire.model.lazy fa si che la chiamata parta solo quando il focus viene spostato dall'input -->
            <input type="text" class="form-control" wire:model.lazy="title" id="input-title" value="{{old('title')}}" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="input-subtitle" class="form-label">Subtitle</label>
            <input type="text" class="form-control" wire:model.lazy="subtitle" id="input-subtitle" value="{{old('subtitle')}}" >
        </div>

        <div class="mb-3">
            <!-- wire.model.debounce.Xms fa si che la chiamata parta in base al timing impostato in millisecondi -->
            <label for="input-body" class="form-label">Body</label>
            <textarea class="form-control" wire:model.debounce.1000ms="body" id="input-body" value="{{old('body')}}" rows="3"></textarea>
            <div id="input-help" class="form-text">We'll never share your informations with anyone else.</div>
        </div>
        
        <button type="submit" class="btn btn-primary">Save</button>

    </form>
</div>

