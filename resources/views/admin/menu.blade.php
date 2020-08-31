<div class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('Home') }}">laravel.local</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('News') }}">Новости <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('Categories') }}">Категории</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('Admin.control') }}">Управление</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('Admin.index') }}">Администратор</a>
      </li>
    </ul>
  </div>
</nav>

</div>