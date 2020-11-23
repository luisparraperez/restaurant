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
<div class="container-fluid">
    <div class="row"> 
        <div class="col-sm-3 col-md-3 col-lg-2 col-xl-2">
        @include('layouts.base.menu')
        </div>
        <div  class="col-sm-9 col-md-9 col-lg-10 col-xl-10" style="padding-top: 50px;">
            @section('contenido')

            @show
        </div>
    </div>
</div>


@include('layouts.base.footer')
    
</body>
</html>