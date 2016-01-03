<nav class="ui menu">
  <div class="header item">
      <a class="navbar-brand" href="{{ url('/') }}">
          Laravel
      </a>
  </div>
  <a href="/articles/" class="active item">文章列表</a>
  <a class="item">Link</a>
  <div class="ui dropdown item" tabindex="0">
    Dropdown
    <i class="dropdown icon"></i>
    <div class="menu transition hidden" tabindex="-1">
      <div class="item">Action</div>
      <div class="item">Another Action</div>
      <div class="item">Something else here</div>
      <div class="divider"></div>
      <div class="item">Separated Link</div>
      <div class="divider"></div>
      <div class="item">One more separated link</div>
    </div>
  </div>
  <div class="right menu">
    <div class="item">
      <div class="ui action left icon input">
        <i class="search icon"></i>
        <input type="text" placeholder="Search">

      </div>
    </div>
    @if (Auth::guest())
    <a href="{{ url('/login') }}" class="item">Login</a>
    <a href="{{ url('/register') }}" class="item">Register</a>
    @else
    <a href="/admin" class="item">
        {{ Auth::user()->name }}
    </a>
    <a href="{{ url('/logout') }}" class="item"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
    @endif
  </div>
</nav>
