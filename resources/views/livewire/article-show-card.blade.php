<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center">{{$article->title}}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary text-center">{{$article->subtitle}}</h6>
    <p class="card-text">{{$article->body}}</p>
    <a href="{{route('articles.edit', $article)}}" class="btn btn-sm btn-outline-warning">Edit</a>
    <livewire:article-delete-button :article="$article">
  </div>
</div>
