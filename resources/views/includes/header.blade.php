<div id="myModal" class="modal fade" role="document" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered rounded">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title">Troli Anda</h2>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup Modal</button>
      </div>
    </div>  
  </div>
</div>
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
    <button type="button" class="btn btn-info" data-toggle="modal" data-keyboard="true" data-target="#myModal" style="width: 20px; height: 20px; padding: 18px; margin: 0 10px; background: url('images/cart.png'); background-size: 38px;  border: none;">
      {{-- <img src="images/cart.png" style="width: inherit; height: inherit;"> --}}
    </button>
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
  </div>
</nav>