{!! Form::Open(['url' => $url, 'method' => $method]) !!}
            <div class="form-group">
                {{ Form::text('ficha_catastral', $predio->ficha_catastral, ['class' => 'form-control', 'placeholder' => 'Ficha Catastral']) }}
            </div>
            <div class="form-group">
                 {{ Form::text('matricula_inmobiliaria', $predio->matricula_inmobiliaria, ['class' => 'form-control', 'placeholder' => 'Matricula Inmobiliaria']) }}
            </div>
            <div class="form-group">
                {{ Form::text('direccion_predio', $predio->direccion_predio, ['class' => 'form-control', 'placeholder' => 'Direccion Del Predio']) }}            
            </div>
            <div class="form-group">
                {{ Form::text('nombre_predio', $predio->nombre_predio, ['class' => 'form-control', 'placeholder' => 'Nombre Del Predio']) }}            
            </div>
            <div class="form-group">
                {{ Form::text('a_hectareas', $predio->a_hectareas, ['class' => 'form-control', 'placeholder' => 'Hectarias Del Predio']) }}            
            </div>
            <div class="form-group">
                {{ Form::text('a_metros', $predio->a_metros, ['class' => 'form-control', 'placeholder' => 'Metros Del Predio']) }}            
            </div>
            <div class="form-group">
                {{ Form::text('a_construida', $predio->a_construida, ['class' => 'form-control', 'placeholder' => 'Area de Construida']) }}            
            </div>
            <div class="form-group">
                {{ Form::text('avaluo', $predio->avaluo, ['class' => 'form-control', 'placeholder' => 'Evaluo']) }}            
            </div>
            <div class="form-group">
                {{ Form::text('tipo_tarifa', $predio->tipo_tarifa, ['class' => 'form-control', 'placeholder' => 'Tipo de Tarifa']) }}            
            </div>
            <div class="form-group">
                {{ Form::text('destino_economico', $predio->destino_economico, ['class' => 'form-control', 'placeholder' => 'Destino Economico']) }}            
            </div>
            <div class="form-group">
                {{ Form::text('porc_tarifa', $predio->porc_tarifa, ['class' => 'form-control', 'placeholder' => 'Porcentaje de la Tarifa']) }}            
            </div>
            <div class="form-group">
                {{ Form::text('estrato', $predio->estrato, ['class' => 'form-control', 'placeholder' => 'Estrato']) }}            
            </div>
            <div class="form-group">
                {{ Form::textarea('observacion', $predio->observacion, ['class' => 'form-control', 'placeholder' => 'Observacion']) }}            
            </div>
            <div class="form-group">
                {{ Form::text('expediente', $predio->expediente, ['class' => 'form-control', 'placeholder' => 'Numero de Expediente']) }}            
            </div>
            <div class="form-group">
                {{ Form::text('v_declarado', $predio->v_declarado, ['class' => 'form-control', 'placeholder' => 'Valor Declarado']) }}            
            </div>
            <div class="form-group">
                {{ Form::text('impuesto_predial', $predio->impuesto_predial, ['class' => 'form-control', 'placeholder' => 'Impuesto Predial']) }}            
            </div>            
            <div class="form-group">
                {{ Form::text('interes_predial', $predio->interes_predial, ['class' => 'form-control', 'placeholder' => 'Interes Predial']) }}            
            </div>
            <div class="form-group">
                {{ Form::text('contribucion_car', $predio->contribucion_car, ['class' => 'form-control', 'placeholder' => 'Contribucion']) }}            
            </div>
            <div class="form-group">
                {{ Form::text('interes_Car', $predio->interes_Car, ['class' => 'form-control', 'placeholder' => 'Interes']) }}            
            </div>
            <div class="form-group">
                {{ Form::text('otros_conceptos', $predio->otros_conceptos, ['class' => 'form-control', 'placeholder' => 'Otros Conceptos']) }}            
            </div>
            <div class="form-group">
                {{ Form::text('cuantia', $predio->cuantia, ['class' => 'form-control', 'placeholder' => 'Cuantia']) }}            
            </div>
            <div class="form-group">
                {{ Form::text('inico', $predio->inico, ['class' => 'form-control', 'placeholder' => 'Año Inicial']) }}            
            </div>
            <div class="form-group">
                {{ Form::text('final', $predio->final, ['class' => 'form-control', 'placeholder' => 'Año Final']) }}            
            </div>
            <div class="form-group">
                {{ Form::select('existe', ['1' => 'SI', '0' => 'NO'], $predio->existe, ['placeholder' => 'Selecciona Si Existe El Predial']) }}            
            </div>
            <div class="form-group">
                {{ Form::text('ubicacion', $predio->ubicacion, ['class' => 'form-control', 'placeholder' => 'Ubicacion del Predial']) }}            
            </div>
            <div class="form-group">
                {{ Form::select('exento', ['1' => 'SI', '0' => 'NO'], $predio->exento, ['placeholder' => 'Selecciona Si Esta Exento']) }}            
            </div>
           <div class="form-group">
                {{ Form::text('semaforo', $predio->semaforo, ['class' => 'form-control', 'placeholder' => 'Semafaro']) }}            
            </div>
            <div class="form-group">
                {{ Form::text('estado', $predio->estado, ['class' => 'form-control', 'placeholder' => 'Estado']) }}            
            </div>

            <div class="form-group">
                <a href="{{ url('admin/predios') }}">Regresar al Listado De Predios</a>
                <input type="submit" value="enviar" class="btn btn-success">
            </div>
{!! Form::close()!!}