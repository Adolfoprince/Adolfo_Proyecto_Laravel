<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagos;
use App\Http\Requests\PagosRequest;

class PagosController extends Controller
{
    public function index()
    {
    	$pagos = pagos::orderBy('id', 'DESC')->paginate();
    	return view('pagos.index', compact('pagos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pagos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PagosRequest $request)
    {
        $pago = new pagos;

        $pago->name_producto = $request->name_producto;
        $pago->tipo_pago = $request->tipo_pago;

        $pago->save();

        return redirect()->route('pagos.index')
                        ->with('info', 'El Pago fue Guardado');
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
        $pago = pagos::find($id);
        return view('pagos.edit', compact('pago'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PagosRequest $request, $id)
    {   
        $pago = pagos::find($id);

        $pago->name_producto = $request->name_producto;
        $pago->tipo_pago = $request->tipo_pago;

        $pago->save();

        return redirect()->route('pagos.index')
                        ->with('info', 'El Pago fue Actualizado'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pago = pagos::find($id);
        $pago->delete();

        return back()->with('info', 'El Pago Fue Eliminado');
    }
}
