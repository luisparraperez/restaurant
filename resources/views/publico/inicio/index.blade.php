<!DOCTYPE html>
<html lang="en">
<head>
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    
    </style>
    <title class="alert alert-danger">Restaurant El Rehue</title>


</head>
<body>

@include('layouts.base.nav')

    <div class="container" style="margin-top:10px;">
    <div class="well well-lg">
        <h1 class="text-center">Bienvenidos!</h1>
        <p class="text-center" style="font-size:20px;"><i class="far fa-clock"></i> Se aceptan pedidos hasta las 15:00 hrs, de Lunes a Viernes.</p>
        <p class="text-center" style="font-size:20px;"><i class="fas fa-car"></i> Se realiza despacho a domicilio sin costo adicional dentro de la Comuna de Lautaro.</p>
        <div class="text-center">
            <a href="https://wa.me/56976162794?text=Hola!" target="_blank" class="btn btn-lg pull-center  btn-success" > <i class="fab fa-whatsapp"></i> Realizar un Pedido! </a>
        </div>
        </div>
    </div>

    <div class="container" style="margin-top:50px" >
    <h1 class="text-center" style="margin-bottom:50px;" > <hr> Nuestro Menú de Hoy</h1>

    @for ($i = 0; $i < count($platos); $i++)
        @if ($i%3==0)
            <div class="row" style="margin-bottom:30px;">
        @endif
        <div class="col-md-4">
            <h3 class="text-center"><strong>{{$platos[$i]['nombre']}}</strong></h3>
            <p>{{$platos[$i]['descripcion']}}</p>
            <h4 class="text-center">${{$platos[$i]['precio']}}</h4>
          </div>
          @if (($i+1)%3==0)
          </div>
          @endif

    @endfor
    

    </div>
    

    @include('layouts.base.footer')
    
</body>
</html>