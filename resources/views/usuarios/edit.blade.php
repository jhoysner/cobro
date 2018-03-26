
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