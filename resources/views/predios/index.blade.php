
@extends('adminlte::page')

@section('title', 'CobroCoactivo')

@section('content_header')
    <h1>Predios</h1>
@stop

@section('content')

    @include('alertas.errors')
    @include('alertas.success') 
    
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<a href="{{url('admin/predios/create')}}" class="btn btn-success">
					Nuevo Predio <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				</a>
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
	
		    			<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModal" 
		    			data-id="{{$predio->id}}">
		    				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
		    			</button>
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

{{-- modal	 --}}

<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Asignar Dueño a Predio</h4>
      </div>
      {!! Form::Open(['url' => 'admin/predio-asignar', 'method' => 'post']) !!}
      <div class="modal-body">
		<div class="row">
			<div class="col-md-4">

				{{ Form::hidden('persona_id', NULL , ['id' => 'apersonaid']) }}
				{{ Form::hidden('predio_id', NULL , ['id' => 'apredioid']) }}

				<div class="form-group">
	                {{ Form::label('num_dc', 'Numero Documento')}}
	             	{{ Form::text('porcentaje', NULL, ['class' => 'form-control', 'placeholder' => 'Numero Documento',
	             	 'id' => 'aidentificador','onClick' => 'myFunction()']) }}

	            </div>
			</div>				
			<div class="col-md-4">
				<div class="form-group">
	                {{ Form::label('nombre', 'Nombre')}}
	             	{{ Form::text('porcentaje', NULL, ['class' => 'form-control', 'placeholder' => 'Nombre',
	             	 'id' => 'anombre']) }}

	            </div>
			</div>			
			<div class="col-md-4">
				<div class="form-group">
	                {{ Form::label('porcentaje', 'Porcentaje %')}}
	                {{ Form::text('porcentaje', NULL, ['class' => 'form-control', 'placeholder' => 'Porcentaje']) }}
	            </div>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
      {!! Form::close()!!}

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

{{-- modal1	 --}}

<div class="modal fade" tabindex="-1" role="dialog" id="myModal2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Buscar o Crear Dueño</h4>
      </div>
      {!! Form::Open(['url' => 'admin/find-create', 'method' => 'POST' , 'id' => 'myForm']) !!}
      <div class="modal-body">
			<div class="row">
				<div class="col-md-4">
		            <div class="form-group">
	    	            {{ Form::label('Numero Documento', 'Numero Documento')}}
	        	        {{ Form::text('num_dc', NULL, ['class' => 'form-control', 'id'=>'identificador', 'placeholder' => 'Numero Documento']) }}
	            	</div>
				</div>			
				<div class="col-md-4">
					
			        <div class="form-group">
		                {{ Form::label('Nombre', 'Nombre')}}
		                {{ Form::text('nombre', Null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'id' => 'Nombre']) }}
			        </div>

				</div>			
				<div class="col-md-4">
	            	<div class="form-group">
	                	{{ Form::label('Email', 'Email')}}
	                	{{ Form::text('email', NULL, ['class' => 'form-control', 'placeholder' => 'Email', 'id' => 'Email']) }}            
	           		 </div>
				</div>
			</div>		
			<div class="row">
				<div class="col-md-4">
				    <div class="form-group">
	                	{{ Form::label('Tipo', 'Tipo')}}
	                	{{ Form::select('tipo', ['NATURAL'=> 'NATURAL', 'JURIDICA' =>'JURIDICA'], NULL, ['placeholder' => 'Selecciona Tipo de Persona', 'id' => 'Tipo'] ) }}            
	            	</div>
				</div>			
				<div class="col-md-4">
			       <div class="form-group">
	                	{{ Form::label('Direccion', 'Direccion')}}
	                	{{ Form::text('direccion', NULL, ['class' => 'form-control', 'placeholder' => 'Direccion', 'id' => 'Direccion']) }}     
	           		</div>

				</div>			
				<div class="col-md-4">
	                <div class="form-group">
	                	{{ Form::label('Telefono', 'Telefono')}}
	                	{{ Form::text('telefono', Null, ['class' => 'form-control', 'placeholder' => 'Telefono', 'id' => 'Telefono']) }}            
	            	</div>
				</div>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id ="btnForm" class="btn btn-primary">Save changes</button>
      </div>
	  {!! Form::close()!!}
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@stop

@section('js')
   <script>
		$(document).ready(function() {
		    $('#example').DataTable();
		} );

		$('#myModal').on('shown.bs.modal', function (e) {
			var predioId = $(e.relatedTarget).data('id')
			$("#apredioid").val(predioId);
		})

		function myFunction(){
			$('#myModal2').modal('show')
		}		

        $('#identificador').change(function(event){
            $('#Nombre').val('');
            $('#Email').val('');
            $('#Direccion').val('');
            $('#Telefono').val('');
            $('#Tipo').val([]);
            $.get("/admin/persona-find/"+event.target.value+"", function(response){
                console.log(response);
                $('#Nombre').val(response.nombre);
                $('#Email').val(response.email);
                $('#Tipo').append("<option selected value='"+response.tipo+"'>"+response.tipo+"</option>");
                $('#Direccion').val(response.direccion);
                $('#Telefono').val(response.telefono);
            });

         });   

        
		  $("#btnForm").click(function (e) {
		      e.preventDefault();
		      var nombre = $('#Nombre').val();
		      $.ajax({
			    type: "POST",
		        url: "persona/find-create",
		        data: $("#myForm").serialize(), 
		        success: function (response) {
		             
		            $('#apersonaid').val(response.id);
		            $('#aidentificador').val(response.num_dc);
		            $('#anombre').val(response.nombre);
		        }
		      });

		    $('#myModal2').modal('hide');

		  });
   </script>
@stop
		            {{-- _token: '{{csrf_token()}}', --}}
