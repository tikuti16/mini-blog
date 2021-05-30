<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      <a class="navbar-brand" href="{{ route('blogs') }}">ブログ</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li>
          <a class="nav-link active" aria-current="page" href="{{ route('blogs') }}">ブログ一覧</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('create') }}">ブログ投稿</a>
        </li>
      </ul>
    </div>
  </div>
</nav>