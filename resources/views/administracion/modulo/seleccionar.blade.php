<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
@include('layouts.base.nav')

<div class="container" style="margin-top:10px;" >
<div class="card bg-light mb-3" >
  <div class="card-body">
        @if(is_object(auth()->user()->modulos) && count(auth()->user()->modulos)>0)
        <x-Balert type="info" classIcon="fas fa-info-circle" text="En el caso que no pueda ver un modulo, debe solicitar que se lo asigne  un usuario administrador." />
            @php 
                $i=0;
            @endphp    
            @foreach (auth()->user()->modulos as $modulo)
            @if ($i%4==0)
            <div class="row" style="margin-bottom:30px;">
            @endif
            <div class="col-xs-12 col-md-6 col-sm-6 col-lg-3">
                <div class="card border-info mb-3" style="max-width: 18rem;">
  
                <div class="card-body text-info text-center">
                    <i class="{{ $modulo->clase_icono }} fa-5x"> </i>
                    <h3 class="card-text">{{ $modulo->descripcion }}</h3>
                </div>
  <div class="card-footer bg-transparent border-info text-center textinfo"><button type="button" class="btn btn-info btn-lg btn-block"><i class="fas fa-sign-in-alt"></i> Ingresar</button></div>
</div>
</div>
        @if (($i+1)%4==0)
          </div>
          @endif
          @php 
                $i++;
            @endphp
            @endforeach

        @else 
        <x-Balert type="warning" classIcon="fas fa-exclamation" text="Actualmente no tiene permiso en ningún módulo. Debe solicitar acceso a un usuario administrador." />
        @endif

        
    
  </div>
</div>
</div>
    
@include('layouts.base.footer')
</body>
</html>