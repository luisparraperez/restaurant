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
            <x-tarjeta-modulo descripcion="{{$modulo->descripcion}}" clase="{{$modulo->clase_icono}}" ruta="{{$modulo->ruta}}" />
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