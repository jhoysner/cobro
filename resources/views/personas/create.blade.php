
@extends('adminlte::page')

@section('title', 'CobroCoactivo')

@section('content_header')
    <h1>Creando Persona</h1>
@stop

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				 @include('personas.partials._form', ['persona' => $persona, 'url' => 'admin/personas', 'method' => 'POST'])
			</div>
		</div>
	</div>
@stop

