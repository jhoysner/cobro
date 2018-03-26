
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


@section('js')
   <script>
        $('#tipo').change(function(event){
            $.get("/admin/usuarios-tipo/"+event.target.value+"", function(response){
                console.log(response);
                $('#jefe').empty();
                for(i=0; i<response.length; i++){
                    $('#jefe').append("<option value='"+response[i].id+"'>"+response[i].name+"</option>");
                }
            });
        });    
   </script>
@stop