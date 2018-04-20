{!! Form::Open(['url' => $url, 'method' => $method]) !!}
            <div class="form-group">
                {{ Form::label('Nombre', 'Nombre')}}
                {{ Form::text('name', $usuario->name, ['class' => 'form-control', 'placeholder' => 'Nombre']) }}
            </div>
            <div class="form-group">
                {{ Form::label('Email', 'Email')}}
                {{ Form::text('email', $usuario->email, ['class' => 'form-control', 'placeholder' => 'Email']) }}            
            </div>

            @if ($method == 'POST')
                <div class="form-group">
                    {{ Form::label('Tipo', 'Tipo')}}
                    {{ Form::select('tipo', $tipos , $usuario->type_id, ['placeholder' => 'Selecciona Tipo de usuario' ,'id' => 'tipo']) }}            
                </div>
            @else
                <div class="form-group">
                  {{ Form::label('Tipo', 'Tipo')}}
                  {{ Form::select('tipo', $tipos , $usuario->type_id, ['placeholder' => 'Selecciona Tipo de usuario' ,'id' => 'tipo'])  }}   
                </div> 
            @endif

            <div class="form-group">
                {{ Form::label('Contraseña')}} <br>
                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña'])}}      
            </div> 

            
            <div class="form-group">
                <a href="{{ url('admin/usuarios') }}">Regresar al Listado De Usuarios</a>
                <input type="submit" value="enviar" class="btn btn-success">
            </div>
{!! Form::close()!!}


