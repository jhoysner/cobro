
@extends('adminlte::page')

@section('title', 'CobroCoactivo')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<a href="{{url('admin/usuarios/create')}}" class="btn btn-success">
					Nueva Usuario <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				</a>
			</div>
		</div>
		<br>
		<table class="table table-bordered cell-border table-hover" id="example"  data-form="deleteForm">
			 <thead>
		        <tr class="active">
		            <th class="text-center">ID</th>
		            <th class="text-center">Nombre</th>
		            <th class="text-center">Email</th>
		            <th class="text-center">Tipo</th>
		            <th class="text-center"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></th>
		            <th class="text-center"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
		        </tr>
		    </thead>

		    <tbody>
			@foreach($usuarios as $usuario)
		    	<tr>
		    		<td class="text-center">{{$usuario->id}}</td>
		    		<td class="text-center">{{$usuario->name}}</td>
		    		<td class="text-center">{{$usuario->email}}</td>
		    		<td class="text-center">{{$usuario->type_id}}</td>
		    		<td class="text-center"><a href="{{ url("admin/usuarios/".$usuario->id."/edit")}}" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
		    		<td class="text-center">
		    		    @include('usuarios.delete', ['usuario' => $usuario])
		    		</td>
		    	</tr>
			@endforeach
			</tbody>
		</table>
	</div>

@stop

@section('js')
   <script>
		$(document).ready(function() {
		    $('#example').DataTable();
		} );
   </script>
@stop
