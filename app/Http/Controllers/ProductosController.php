<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Http\Requests\ProductosRequest;

class ProductosController extends Controller
{
    public function index()
    {
    	$productos = productos::orderBy('id', 'DESC')->paginate();
    	return view('productos.index', compact('productos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductosRequest $request)
    {
        $producto = new productos;

        $producto->name_comprador = $request->name_comprador;
        $producto->name = $request->name;
        $producto->descripcion = $request->descripcion;
        $producto->fabricante = $request->fabricante;

        $producto->save();

        return redirect()->route('productos.index')
                        ->with('info', 'El Producto fue Guardado');
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
        $producto = productos::find($id);
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductosRequest $request, $id)
    {   
        $producto = productos::find($id);

        $producto->name_comprador = $request->name_comprador;
        $producto->name = $request->name;
        $producto->descripcion = $request->descripcion;
        $producto->fabricante = $request->fabricante;

        $producto->save();

        return redirect()->route('productos.index')
                        ->with('info', 'El Producto fue Actualizado'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = productos::find($id);
        $producto->delete();

        return back()->with('info', 'El Producto Fue Eliminado');
    }
}
