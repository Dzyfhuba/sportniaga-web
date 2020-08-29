@include('includes.cart')
@include('auth.login')
@include('auth.register')
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #444">
  <button class="navbar-toggler order-left border-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand pl-3" href="/">
    <h1 style="font-size: 25px; color: #36c702">Sportniaga&#174;</h1>
  </a>
  <div class="collapse navbar-collapse order-sm-last order-lg-0{{--  col-sm-6 order-sm-12 --}}" id="navbarSupportedContent" style="background-color: #444; z-index: 999">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item{{ request()->is('jerseybola') ? ' active' : '' }}">
        <a class="nav-link" href="/jerseybola">Jersey Bola</a>
      </li>
      <li class="nav-item{{ request()->is('jerseyfutsal') ? ' active' : '' }}">
        <a class="nav-link" href="/jerseyfutsal">Jersey Futsal</a>
      </li>
      <li class="nav-item{{ request()->is('sepatubola') ? ' active' : '' }}">
        <a class="nav-link" href="/sepatubola">Sepatu Bola</a>
      </li>
      <li class="nav-item{{ request()->is('sepatufutsal') ? ' active' : '' }}">
        <a class="nav-link" href="/sepatufutsal">Sepatu Futsal</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form>
    <button type="button" class="btn btn-info" data-toggle="modal" data-keyboard="true" data-target="#cart-modal" style="width: 20px; height: 20px; padding: 18px; margin: 0 10px; background: url('images/cart.png'); background-size: 38px;  border: none;">
      {{-- <img src="images/cart.png" style="width: inherit; height: inherit;"> --}}
    </button>
    <ul class="navbar-nav">
      @guest
      <li class="navbar-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              Guest
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background: #555; position: absolute;">
          <a class="dropdown-item" style="color: white" data-toggle="modal" data-keyboard="true" data-target="#login-modal">{{ __('Login') }}</a>
          @if (Route::has('register'))
          <a class="dropdown-item" style="color: white" data-toggle="modal" data-keyboard="true" data-target="#register-modal">{{ __('Register') }}</a>
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
  </div>
</nav>