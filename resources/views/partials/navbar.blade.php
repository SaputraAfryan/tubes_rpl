<nav class="navbar navbar-light" style="background-color: #afeeee">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="logo.png" alt="SkutKost!-logo.png" width="95" height="95" class="d-inline-block align-text-middle rounded-circle">
        SkutKost!
      </a>
      <div class="d-flex flex-row-reverse">
        @if (Route::has('login'))
          @auth
            <div class="p-2">
              <a href="{{ url('/dashboard') }}" class="btn btn-primary" role="button">Dashboard</a>
            </div>
            @else
              @if (Route::has('register'))
                <div class="p-2">
                  <a href="{{ route('register') }}" class="btn btn-secondary" role="button">Register</a>
                </div>
              @endif
              <div class="p-2">
                <a href="{{ route('login') }}" class="btn btn-primary" role="button">Login</a>
              </div>
          @endauth
        @endif
        <div class="p-2">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>   
        </div>
      </div>
    </div>
  </nav>