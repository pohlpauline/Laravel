<nav class="navbar navbar-expand-md">
    <div class="container">
        <a class="navbar-brand text-dark fs-4" href="{{url('/')}}">
            welpenblog
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link {{Request::is('/') ? 'current': ''}}" href="{{ url('/') }}">Home</a>
              
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('about*') ? 'current': ''}}" href="{{ url('about') }}">Über uns</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('user*') ? 'current': ''}}" href="{{ url('user') }}">Erfahrungsberichte von Hundebesitzer</a>
            </li>

        </ul>

        
        <ul class="navbar-nav ms-auto">
              <!--aus welcome.blade kopiert-->

              @if (Route::has('login'))
              
              @if(Auth::check() && Auth::id())
                        <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="nav-link">{{ Auth::user()->name }}</a>
                        </li>
                    @else
                        <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link text-dark">Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link text-dark">Register</a>
                            </li>
                        @endif
                    @endif
               
            @endif

        

        </ul>
       
      

    </div>
    </div>
</nav>