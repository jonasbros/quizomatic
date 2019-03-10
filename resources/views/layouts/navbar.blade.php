<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{ url('/') }}">
      <!-- <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28"> -->
      <strong>{{ config('app.name', 'Quizomatic') }}</strong>
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item">
        Home
      </a>

      <a class="navbar-item">
        Documentation
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          More
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            About
          </a>
          <a class="navbar-item">
            Jobs
          </a>
          <a class="navbar-item">
            Contact
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Report an issue
          </a>
        </div>
      </div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          @auth
              <a href="{{ url('/home') }}">{{ \Auth::user()->name }}</a>
          @else
              <a class="button is-primary" href="{{ route('login') }}">Login</a>

              @if (Route::has('register'))
                  <a class="button is-light" href="{{ route('register') }}">Register</a>
              @endif
          @endauth
        </div>
      </div>
    </div>
  </div>
</nav>