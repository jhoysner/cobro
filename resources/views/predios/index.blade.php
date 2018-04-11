
@extends('adminlte::page')

@section('title', 'CobroCoactivo')

@section('content_header')
    <h1>Predios</h1>
@stop

@section('content')
    
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<a href="{{url('admin/predios/create')}}" class="btn btn-success">
					Nuevo Predio <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				</a>
			</div>			
			<div class="pull-right">

				@if(Auth::user()->type->nombre == 'Admin')
				<div class="col-md-3">
				   <form action="{{route('importar')}}" enctype="multipart/form-data" method="POST">
				           {{ csrf_field() }}
					
					<div class="form-group">
					    <input id="archivo" accept=".csv" name="archivo" type="file" required="" />
					    <input name="MAX_FILE_SIZE" type="hidden" value="20000" /> <br>
					    <input class="btn btn-info btn-xs" name="enviar" type="submit" value="Importa"  style="margin-top: -2em" />
					</div>
				    </form>
				</div>
				@endif
			</div>
		</div>

		<br>

		<ul class="nav nav-tabs">
		  <li role="presentation" class="active"><a href="{{url('admin/predios')}}">Predios</a></li>
		  <li role="presentation"><a href="{{route('unnassigned')}}">Predios sin Asignar</a></li>
		  <li role="presentation"><a href="{{route('assignor')}}">Predios Asignados</a></li> 
		</ul>
		<br>
		<table class="table table-bordered cell-border table-hover" id="example"  data-form="deleteForm">
			 <thead>
		        <tr class="active">
		            <th class="text-center">FICHA CATASTRAL</th>
		            <th class="text-center">MATRICULA INMOBILARIA</th>
		            <th class="text-center">Direccion</th>
		            <th class="text-center">Nombre</th>
		            <th class="text-center"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></th>
		            <th class="text-center"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></th>
		            <th class="text-center"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
		        </tr>
		    </thead>

		    <tbody>
			@foreach($predios as $predio)
		    	<tr>
		    		<td>{{$predio->ficha_catastral}}</td>
		    		<td>{{$predio->matricula_inmobiliaria}}</td>
		    		<td>{{$predio->direccion_predio}}</td>
		    		<td>{{$predio->nombre_predio}}</td>
		    		<td>
		    			<a class="btn btn-xs btn-success" href="{{ asset('/admin/personas-predios/'.$predio->id) }}">
		    				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
		    			</a>
		    		</td>
		    		<td><a href="{{ url("admin/predios/".$predio->id."/edit")}}" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
		    		<td>
		    		    @include('predios.delete', ['predio' => $predio])
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
		            {{-- _token: '{{csrf_token()}}', --}}
