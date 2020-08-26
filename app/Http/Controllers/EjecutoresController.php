<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ejecutores;
use Session;

class EjecutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos = Ejecutores::get();

        return view('ejecutores', compact('datos'));
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

    public function asig_ejecutor()
    {
        //
        return view('asig_ejecutor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $variable = Ejecutores::create([
            'name' => request('name'),
            'last_name' => request('last_name'),
            'rank' => request('rank'),
            'shell' => request('shell'),
            'email' => request('email'),
            'agente' => request('agente'),
            'co_criminal' => request('co_criminal'),
            'description' => request('description'),            
        ]);
        Session::flash('save','Ejecutor agregado Correctamente');
        return redirect('ejecutores');        
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
    public function edit(Ejecutores $fila)
    {
        // 
        return view('edit_ejecutor',[
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
    public function update(Ejecutores $fila)
    {
        //
        $fila->update([
            'name' => request('name'),
            'last_name' => request('last_name'),
            'rank' => request('rank'),
            'shell' => request('shell'),
            'email' => request('email'),
            'agente' => request('agente'),
            'co_criminal' => request('co_criminal'),
            'description' => request('description'),
        ]);
        Session::flash('update','Ejecutor editado Correctamente');
        return redirect('ejecutores');         

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ejecutores $fila)
    {
        //
        $fila->delete();
        Session::flash('delete','Ejecutor eliminado Correctamente');
        return redirect('ejecutores');        
    }
}
