
@extends('adminlte::page')

@section('title', 'CobroCoactivo')

@section('content_header')
    <h1>Predios Asignados ({{$predios->count()}})</h1>
@stop

@section('content')
	<div class="container-fluid">

		<br>

		<ul class="nav nav-tabs">
		  <li role="presentation"><a href="{{url('admin/predios')}}">Predios</a></li>
		  <li role="presentation"><a href="{{route('unnassigned')}}">Predios sin Asignar</a></li>
		  <li role="presentation" class="active"><a href="{{route('assignor')}}">Predios Asignados</a></li> 
		</ul>
		<br>
		<table class="table table-bordered cell-border table-hover" id="example"  data-form="deleteForm">
			 <thead>
		        <tr class="active">
		            <th class="text-center">FICHA CATASTRAL</th>
		            <th class="text-center">MATRICULA INMOBILARIA</th>
		            <th class="text-center">Direccion</th>
		            <th class="text-center">Nombre</th>
		        </tr>
		    </thead>

		    <tbody>
			@foreach($predios as $predio)
		    	<tr>
		    		<td>{{$predio->ficha_catastral}}</td>
		    		<td>{{$predio->matricula_inmobiliaria}}</td>
		    		<td>{{$predio->direccion_predio}}</td>
		    		<td>{{$predio->nombre_predio}}</td>
		    	</tr>
			@endforeach
			</tbody>
		</table>
	</div>

@endsection