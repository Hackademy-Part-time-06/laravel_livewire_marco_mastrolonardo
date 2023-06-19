<nav class="navbar  navbar-expand-lg bg-body-tertiary rounded" aria-label="Twelfth navbar example">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Articles</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('articles.index')}}">Index</a></li>
              <li><a class="dropdown-item" href="{{route('articles.create')}}">Create</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Authors</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('authors.index')}}">Index</a></li>
              <li><a class="dropdown-item" href="{{route('authors.create')}}">Create</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>