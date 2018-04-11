<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Predio;
use App\PersonaPredio;
use Session;

class PersonaPredioController extends Controller
{


    
    public function store(Request $request)
    {
        
        
    }




    public function show($id)
    {
        $predio = Predio::findOrFail($id);

        return view('personas-predios.index', ['predio' => $predio]);
        Session::flash('message', 'Se ha asignado el Propietario al Predio');
    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {
      

    }


    public function destroy($id)
    {

    }

    public function predioAsignarPersona(Request $request)
    {
    	$create = PersonaPredio::Create($request->all());

        return redirect()->action(
            'PersonaPredioController@show', ['id' => $create->predio_id]
        );

        Session::flash('message', 'Se ha asignado el Propietario al Predio');
    }

  
}
