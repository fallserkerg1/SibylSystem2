<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agentes;
use Session;

class AgentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = Agentes::get();

        return view('agentes', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $variable = Agentes::create([
            'name' => request('name'),
            'last_name' => request('last_name'),
            'rank' => request('rank'),
            'shell' => request('shell'),
            'email' => request('email'),
            'distrit' => request('distrit'),
            'cod_sibyl' => request('cod_sibyl'),
            'description' => request('description'),            
        ]);
        Session::flash('save','Agente Registrado Correctamente');
        return redirect('agentes');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
        //
    {
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Agentes $fila)
        
    {
        //
        return view('edit_agente',[
            'fila' => $fila
        ]); 
    }    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Agentes $fila)
    {
        //
        $fila->update([
            'name' => request('name'),
            'last_name' => request('last_name'),
            'rank' => request('rank'),
            'shell' => request('shell'),
            'email' => request('email'),
            'distrit' => request('distrit'),
            'cod_sibyl' => request('cod_sibyl'),
            'description' => request('description'), 
        ]);
        Session::flash('update','Agente Editado Correctamente');
        return redirect('agentes');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agentes $fila)
    {
        //
        $fila->delete();
        Session::flash('delete','Agente Eliminado Correctamente');
        return redirect('agentes');
    }
}
