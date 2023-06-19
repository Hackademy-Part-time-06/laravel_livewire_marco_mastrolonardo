<div class="mt-5 container">
    <table class="table table-striped shadow">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Subtitle</th>
            <th scope="col">Body</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($articles as $article)
            <tr>
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->subtitle}}</td>
                <td>{{$article->body}}</td>
                <td>
                    <a href="{{route('articles.show', $article)}}" class="btn btn-sm btn-outline-info">See Details</a>
                    <a href="{{route('articles.edit', $article)}}" class="btn btn-sm btn-outline-warning">Edit</a>
                    <livewire:article-delete-button :article="$article">
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>
</div>