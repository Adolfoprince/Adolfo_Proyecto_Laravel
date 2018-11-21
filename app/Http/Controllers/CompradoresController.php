<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compradores;
use App\Http\Requests\CompradoresRequest;

class CompradoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compradores = compradores::orderBy('id', 'DESC')->paginate();
        return view('compradores.index', compact('compradores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compradores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompradoresRequest $request)
    {
        $comprador = new compradores;

        $comprador->name = $request->name;
        $comprador->apellido = $request->apellido;
        $comprador->direccion = $request->direccion;

        $comprador->save();

        return redirect()->route('compradores.index')
                        ->with('info', 'El Comprador fue Guardado');
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
        $comprador = compradores::find($id);
        return view('compradores.edit', compact('comprador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompradoresRequest $request, $id)
    {   
        $comprador = compradores::find($id);

        $comprador->name = $request->name;
        $comprador->apellido = $request->apellido;
        $comprador->direccion = $request->direccion;

        $comprador->save();

        return redirect()->route('compradores.index')
                        ->with('info', 'El Comprador fue Actualizado');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comprador = compradores::find($id);
        $comprador->delete();

        return back()->with('info', 'El Comprador Fue Eliminado');
    }
}
