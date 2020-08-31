<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	<header class="header">
		<nav class="navbar navbar-expand-sm navbar-dark justify-content-center bg-dark">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#">Dashboard</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Transaksi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Statistik</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Obrolan</a>
				</li>
			</ul>
			<ul class="navbar-nav">
      @guest
      <li class="navbar-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              Guest
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background: #555; position: absolute; translate: -5rem;">
          <a class="dropdown-item" style="" href="{{ route('login') }}">{{ __('Login') }}</a>
          @if (Route::has('register'))
          <a class="dropdown-item" style="" href="{{ route('register') }}">{{ __('Register') }}</a>
          @endif
        </div>
      </li>
      @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" style="background-color: #444;" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" style="color: lightgray;" href="{{ route('logout') }}"
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
		</nav>
	</header>
	<div id="main" class="row-cols-3 container-fluid p-3">
		@yield('content')
	</div>
</body>
</html>