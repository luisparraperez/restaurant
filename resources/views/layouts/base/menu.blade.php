<nav class="navbar navbar-light navbar-expand-sm px-0 flex-row flex-nowrap">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarWEX" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                 <div class="navbar-collapse collapse" id="navbarWEX">
                    <div class="nav flex-sm-column flex-row">
                        <a class="nav-item nav-link text-info" href="#"><i class="fas fa-home fa-2x"></i> Inicio</a>
                        @if(auth()->user() && is_object(auth()->user()->modulos) )
                            @foreach (auth()->user()->modulos as $modulos)
                                @if($modulos->id==auth()->user()->modulo_actual_id)
                                <li class="nav-item">
                                    <a class="nav-item nav-link text-muted" href="#{{$modulos->ruta}}_1"><i class="{{$modulos->clase_icono}} fa-2x"></i><br> {{$modulos->descripcion}}</a>
                                    <div class="colapsed" id="{{$modulos->ruta}}_1" aria-expanded="true">
                                        <ul class="flex-column pl-2 nav">
                                            @if(is_object($modulos->menus))
                                                @foreach ($modulos->menus as $menu)
                                                    <li class="nav-item"><a class="nav-link py-0 text-info" href="#"><span>{{$menu->texto}}</span></a></li>

                                                @endforeach

                                            @endif
                            
                        </ul>
                    </div>
                                </li>
                                @else
                                <a class="nav-item nav-link text-info" href="{{url($modulos->ruta)}}"><i class="{{$modulos->clase_icono}} fa-2x"></i><br> {{$modulos->descripcion}}</a>

                                @endif
                             
                            @endforeach
                        @endif
                    </div>
                </div>
            </nav>