{!! Form::Open(['url' => $url, 'method' => $method]) !!}
            <div class="form-group">
                {{ Form::label('ficha_catastral', 'Ficha Catastral')}}
                {{ Form::text('ficha_catastral', $predio->ficha_catastral, ['class' => 'form-control', 'placeholder' => 'Ficha Catastral']) }}
            </div>
            <div class="form-group">
                {{ Form::label('Matricula Inmobiliaria', 'Matricula Inmobiliaria')}}
                {{ Form::text('matricula_inmobiliaria', $predio->matricula_inmobiliaria, ['class' => 'form-control', 'placeholder' => 'Matricula Inmobiliaria']) }}
            </div>
            <div class="form-group">
                {{ Form::label('direccion_predio', 'Direccion Predio')}}
                {{ Form::text('direccion_predio', $predio->direccion_predio, ['class' => 'form-control', 'placeholder' => 'Direccion Del Predio']) }}            
            </div>
            <div class="form-group">
                {{ Form::label('nombre_predio', 'Nombre Predio')}}
                {{ Form::text('nombre_predio', $predio->nombre_predio, ['class' => 'form-control', 'placeholder' => 'Nombre Del Predio']) }}            
            </div>
            <div class="form-group">
                {{ Form::label('a_hectareas', 'Hectarias del Predio')}}
                {{ Form::text('a_hectareas', $predio->a_hectareas, ['class' => 'form-control', 'placeholder' => 'Hectarias Del Predio']) }}            
            </div>
            <div class="form-group">
                {{ Form::label('a_metros', 'Metros del Predio')}}
                {{ Form::text('a_metros', $predio->a_metros, ['class' => 'form-control', 'placeholder' => 'Metros Del Predio']) }}            
            </div>
            <div class="form-group">
                {{ Form::label('a_construida', 'Area Construida')}}
                {{ Form::text('a_construida', $predio->a_construida, ['class' => 'form-control', 'placeholder' => 'Area SConstruida']) }}            
            </div>
            <div class="form-group">
                {{ Form::label('avaluo', 'Evaluo')}}
                {{ Form::text('avaluo', $predio->avaluo, ['class' => 'form-control', 'placeholder' => 'Evaluo']) }}            
            </div>
            <div class="form-group">
                {{ Form::label('tipo_tarifa', 'Tipo de Tarifa')}}
                {{ Form::text('tipo_tarifa', $predio->tipo_tarifa, ['class' => 'form-control', 'placeholder' => 'Tipo de Tarifa']) }}            
            </div>
            <div class="form-group">
                {{ Form::label('destino_economico', 'Destin Economico')}}
                {{ Form::text('destino_economico', $predio->destino_economico, ['class' => 'form-control', 'placeholder' => 'Destino Economico']) }}            
            </div>
            <div class="form-group">
                {{ Form::label('porc_tarifa', 'Porcentaje de la Tarifa')}}
                {{ Form::text('porc_tarifa', $predio->porc_tarifa, ['class' => 'form-control', 'placeholder' => 'Porcentaje de la Tarifa']) }}            
            </div>
            <div class="form-group">
                {{ Form::label('estrato', 'Estrato')}}
                {{ Form::text('estrato', $predio->estrato, ['class' => 'form-control', 'placeholder' => 'Estrato']) }}            
            </div>
            <div class="form-group">
                {{ Form::label('observacion', 'Observacion')}}
                {{ Form::textarea('observacion', $predio->observacion, ['class' => 'form-control', 'placeholder' => 'Observacion']) }}            
            </div>
            <div class="form-group">
                {{ Form::label('expediente', 'Numero de Expediente')}}
                {{ Form::text('expediente', $predio->expediente, ['class' => 'form-control', 'placeholder' => 'Numero de Expediente']) }}            
            </div>
            <div class="form-group">
                {{ Form::label('v_declarado', 'Valor Declarado')}}
                {{ Form::text('v_declarado', $predio->v_declarado, ['class' => 'form-control', 'placeholder' => 'Valor Declarado']) }}            
            </div>
            <div class="form-group">
                {{ Form::label('impuesto_predial', 'Impuesto Predial')}}
                {{ Form::text('impuesto_predial', $predio->impuesto_predial, ['class' => 'form-control', 'placeholder' => 'Impuesto Predial']) }}            
            </div>            
            <div class="form-group">
                {{ Form::label('interes_predial', 'Interes Predial')}}
                {{ Form::text('interes_predial', $predio->interes_predial, ['class' => 'form-control', 'placeholder' => 'Interes Predial']) }}            
            </div>
            <div class="form-group">
                {{ Form::label('contribucion_car', 'Contribucion')}}
                {{ Form::text('contribucion_car', $predio->contribucion_car, ['class' => 'form-control', 'placeholder' => 'Contribucion']) }}            
            </div>
            <div class="form-group">
                {{ Form::label('interes_Car', 'Interes')}}
                {{ Form::text('interes_Car', $predio->interes_Car, ['class' => 'form-control', 'placeholder' => 'Interes']) }}            
            </div>
            <div class="form-group">
                {{ Form::label('otros_conceptos', 'Otros Conceptos')}}
                {{ Form::text('otros_conceptos', $predio->otros_conceptos, ['class' => 'form-control', 'placeholder' => 'Otros Conceptos']) }}            
            </div>
            <div class="form-group">
                {{ Form::label('cuantia', 'Cuantia')}}
                {{ Form::text('cuantia', $predio->cuantia, ['class' => 'form-control', 'placeholder' => 'Cuantia']) }}            
            </div>
            <div class="form-group">
                {{ Form::label('incio', 'Año Inicio')}}
                {{ Form::text('inico', $predio->inico, ['class' => 'form-control', 'placeholder' => 'Año Inicial']) }}            
            </div>
            <div class="form-group">
                {{ Form::label('final', 'Año Final')}}
                {{ Form::text('final', $predio->final, ['class' => 'form-control', 'placeholder' => 'Año Final']) }}            
            </div>
            <div class="form-group">
                {{ Form::label('existe', 'Existe')}}
                {{ Form::select('existe', ['1' => 'SI', '0' => 'NO'], $predio->existe, ['placeholder' => 'Selecciona Si Existe El Predial']) }}            
            </div>
            <div class="form-group">
                {{ Form::label('ubicacion', 'Ubicacion del Predio')}}
                {{ Form::text('ubicacion', $predio->ubicacion, ['class' => 'form-control', 'placeholder' => 'Ubicacion del Predial']) }}            
            </div>
            <div class="form-group">
                {{ Form::label('exento', 'Exento')}}
                {{ Form::select('exento', ['1' => 'SI', '0' => 'NO'], $predio->exento, ['placeholder' => 'Selecciona Si Esta Exento']) }}            
            </div>
           <div class="form-group">
                {{ Form::label('semaforo', 'Semaforo')}}
                {{ Form::text('semaforo', $predio->semaforo, ['class' => 'form-control', 'placeholder' => 'Semafaro']) }}            
            </div>
            <div class="form-group">
                {{ Form::label('estado', 'Estado')}}
                {{ Form::text('estado', $predio->estado, ['class' => 'form-control', 'placeholder' => 'Estado']) }}            
            </div>

            <div class="form-group">
                <a href="{{ url('admin/predios') }}">Regresar al Listado De Predios</a>
                <input type="submit" value="enviar" class="btn btn-success">
            </div>
{!! Form::close()!!}