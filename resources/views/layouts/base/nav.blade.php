
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
<div class="container">
      <a class="navbar-brand" href="#">{{env('APP_NAME')}}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
          
          
        </ul>
        @if(auth()->user())
        <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{substr(auth()->user()->name,0,1).''.substr(auth()->user()->apellido_paterno,0,1)}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <form method="#" class="text-center" action="/">
                @csrf

                <button type="submit" class="">
                <i class="fas fa-user-cog"></i> {{ __('Configuración') }}
                </button>
            </form>
          <div class="dropdown-divider"></div>
          <form method="POST" class="text-center" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="">
                <i class="fas fa-sign-out-alt"></i> {{ __(' Cerrar Sesión') }}
                </button>
            </form>
        </div>
      </li>
          
        </ul>
        @endif
      </div>
      </div> 
    </nav>
   