<?php

namespace App\Http\Controllers;

use App\PersonaPredio;
use App\Predio;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PredioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $predios = Predio::all();

        return view('predios.index', compact('predios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $predio = new Predio;
        return view('predios.create', compact('predio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $predio = new Predio;
        
        $predio->ficha_catastral = $request->ficha_catastral;
        $predio->matricula_inmobiliaria = $request->matricula_inmobiliaria;
        $predio->direccion_predio = $request->direccion_predio;
        $predio->nombre_predio = $request->nombre_predio;
        $predio->a_hectareas = $request->a_hectareas;
        $predio->a_metros = $request->a_metros;
        $predio->a_construida = $request->a_construida ;
        $predio->avaluo = $request->avaluo;
        $predio->tipo_tarifa = $request->tipo_tarifa;
        $predio->destino_economico = $request->destino_economico;
        $predio->porc_tarifa = $request->porc_tarifa;
        $predio->estrato = $request->estrato;
        $predio->observacion = $request->observacion;
        $predio->expediente = $request->expediente;
        $predio->v_declarado = $request->v_declarado;
        $predio->impuesto_predial = $request->impuesto_predial;
        $predio->interes_predial = $request->interes_predial;
        $predio->contribucion_car = $request->contribucion_car;
        $predio->interes_Car = $request->interes_Car;
        $predio->otros_conceptos = $request->otros_conceptos;
        $predio->cuantia = $request->cuantia;
        $predio->inicio = Carbon::now();
        $predio->final =  Carbon::now();
        $predio->existe = $request->existe;
        $predio->ubicacion = $request->ubicacion;
        $predio->exento = $request->exento;
        $predio->semaforo = $request->semaforo;
        $predio->estado = $request->estado;

        if($predio->save()){

            return redirect('/admin/predios');

        }else {
        return view('admin/predios.create', ['predios' => $predios]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $predio = Predio::findOrFail($id);

        return view('predios.edit', ['predio' => $predio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $predio = Predio::findOrFail($id);

        $predio->ficha_catastral = $request->ficha_catastral;
        $predio->matricula_inmobiliaria = $request->matricula_inmobiliaria;
        $predio->direccion_predio = $request->direccion_predio;
        $predio->nombre_predio = $request->nombre_predio;
        $predio->a_hectareas = $request->a_hectareas;
        $predio->a_metros = $request->a_metros;
        $predio->a_construida = $request->a_construida ;
        $predio->avaluo = $request->avaluo;
        $predio->tipo_tarifa = $request->tipo_tarifa;
        $predio->destino_economico = $request->destino_economico;
        $predio->porc_tarifa = $request->porc_tarifa;
        $predio->estrato = $request->estrato;
        $predio->observacion = $request->observacion;
        $predio->expediente = $request->expediente;
        $predio->v_declarado = $request->v_declarado;
        $predio->impuesto_predial = $request->impuesto_predial;
        $predio->interes_predial = $request->interes_predial;
        $predio->contribucion_car = $request->contribucion_car;
        $predio->interes_Car = $request->interes_Car;
        $predio->otros_conceptos = $request->otros_conceptos;
        $predio->cuantia = $request->cuantia;
        $predio->inicio = Carbon::now();
        $predio->final =  Carbon::now();
        $predio->existe = $request->existe;
        $predio->ubicacion = $request->ubicacion;
        $predio->exento = $request->exento;
        $predio->semaforo = $request->semaforo;
        $predio->estado = $request->estado;


        if($predio->save()){

            return redirect('/admin/predios');

        }else {
        return view('admin/predios.create', ['predio' => $predio]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $predio = Predio::findOrFail($id);
        $predio->delete();

        return redirect('admin/predios');
    }

    public function predioAsignarPersona(Request $request)
    {
        $personapredio = new PersonaPredio;

        $personapredio->predio_id = $request->predio_id;
        $personapredio->persona_id = $request->persona_id;
        $personapredio->porcentaje = $request->porcentaje;

        $personapredio->save();


        return  redirect('admin/predios');
    }

    public function predioAsignarAdministrativeStore(Request $request){

        $predios = $request->predio_id;

        foreach ($predios as $predio) 
        {
            echo $predio;
        }
    }

    public function predioSinAsignar(){


        $predios = Predio::where('estado', 0)->get();

        // $usuariosTypeFilt = User::all()->reject(function ($user) { 
        //                      return $user->type->nombre <> 'Secretaria';
        //                     })
        //                     ->pluck('name', 'id');

        $usuariosTypeFilt = User::whereHas('user_boss', function ($query) {
                                $query->where('boss_id' , auth()->user()->id);
                            })->pluck('name', 'id');


        // $usuariosTypeFilt = User::whereHas('type', function ($query) use ($tipo) {
        //                     $query->where('id',$tipo-1);
        //                 })->pluck('name', 'id');
         

        return view('predios.unassigned', compact('predios' ,'usuariosTypeFilt'));
    }    

    public function predioAsignado(){

        $predios = Predio::where('estado', 1)->get();

        return view('predios.assignor', compact('predios'));
    }   
}
