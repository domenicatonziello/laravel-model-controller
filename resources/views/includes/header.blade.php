<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{request()->routeIs('home') ? 'active' : '' }}" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{request()->routeIs('about') ? 'active' : '' }}" href="{{route('about')}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{request()->routeIs('contatti') ? 'active' : '' }}" href="{{route('contatti')}}">Contatti</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>