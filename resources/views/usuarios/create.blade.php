
@extends('adminlte::page')

@section('title', 'CobroCoactivo')

@section('content_header')
    <h1>Creando Usuario</h1>
@stop

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				 @include('usuarios.partials._form', ['usuario' => $usuario, 'tipos'=> $tipos ,'url' => 'admin/usuarios', 'method' => 'POST'])
			</div>
		</div>
	</div> 
@stop

