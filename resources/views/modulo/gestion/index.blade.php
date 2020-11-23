@extends('administracion.masterModulo')
@section('contenido')
<div class="container-fluid">
    <div class="row">
        <x-tarjeta-menu texto="{{$data['usuarios']}} Usuarios vigentes" icono="fas fa-user" color="primary"  />
        <x-tarjeta-menu texto="{{$data['modulos']}} Modulos" icono="fas fa-list-alt" color="info"  />
        <x-tarjeta-menu texto="{{$data['menus']}} Menús" icono="fas fa-bars" color="secondary"  />
    </div>
</div>
@endsection