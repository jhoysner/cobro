<?php

namespace App\Http\Controllers;

use App\User;
use App\UserType;
use Illuminate\Http\Request;

class UserController extends Controller
{
    

    public function index()
    {
        
        $usuarios = User::all();

        return view('usuarios.index', compact('usuarios')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $usuario = new User;

            
        $tipos =  UserType::pluck('nombre', 'id');

        return view('usuarios.create', compact('usuario' ,'tipos')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $usuario = new User;
        
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->type_id = $request->tipo;
        $usuario->password = bcrypt($request->password);

        if($usuario->save()){

            return redirect('/admin/usuarios');

        }else {
        return view('admin/usuarios.create', ['usuario' => $usuario]);
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
        $usuario = User::findOrFail($id);

        return view('usuarios.edit', ['usuario' => $usuario]);
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
        $usuario = User::findOrFail($id);

        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->tipo = $request->tipo;
        $usuario->password = bcrypt($request->password);


        if($usuario->save()){

            return redirect('/admin/usuarios');

        }else {
        return view('admin/usuarios.create', ['usuario' => $usuario]);
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
        
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect('admin/usuarios');
    }

}
