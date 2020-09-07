<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
  <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name', 'Laravel') }}
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ request()->routeIs('News')? 'Active' : ''}}">
              <a class="nav-link" href="{{ route('News') }}">Новости <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ request()->routeIs('Categories')? 'Active' : ''}}">
              <a class="nav-link" href="{{ route('Categories') }}">Категории</a>
            </li>
            <li class="nav-item {{ request()->routeIs('Admin.index')? 'Active' : ''}}">
              <a class="nav-link" href="{{ route('Admin.index') }}">Администратор</a>
            </li>
            @if(request()->route()->getPrefix() == '/admin')
            <li class="nav-item {{ request()->routeIs('Admin.control')? 'Active' : ''}}">
              <a class="nav-link" href="{{ route('Admin.control') }}">Управление</a>
            </li>
            @endif
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>