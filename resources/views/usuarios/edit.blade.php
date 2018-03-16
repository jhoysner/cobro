
@extends('adminlte::page')

@section('title', 'CobroCoactivo')

@section('content_header')
    <h1>Editando Usuario</h1>
@stop

@section("content")
	<div class="container-fluid">
    	<div class="white">

        	@include('usuarios.partials._form', ['usuario' => $usuario, 'url' => 'admin/usuarios/'.$usuario->id, 'method' => 'PATCH'])
    	</div>
    </div>
@endsection