<?php

namespace App\Http\Controllers;

use App\DetalleVenta;
use Illuminate\Http\Request;

class DetalleVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
    public function store(Request $request, $venta)
    {
        $request->validate([
            'id_producto' => 'required|integer|min:1|max:1000',
            'cantidad' => 'required|integer|min:1|max:9999',
            'precio_unitario' => 'required|integer|min:1|max:99999',
        ]);

        DetalleVenta::create([
            'id_venta' => $venta,
            'id_producto' => $request->id_producto,
            'cantidad' => $request->cantidad,
            'precio_unitario' => $request->precio_unitario,
            'subtotal' => $request->precio_unitario * $request->cantidad

        ]);
        return redirect()->route('ventas.show', $venta)->with('success','Detalle de venta creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DetalleVenta  $detalleVenta
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleVenta $detalleVenta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetalleVenta  $detalleVenta
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleVenta $detalleVenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetalleVenta  $detalleVenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleVenta $detalleVenta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetalleVenta  $detalleVenta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $venta)
    {
        $detalle = DetalleVenta::find($id);
        $detalle->delete();
        return redirect()->route('ventas.show', $venta)->with('success','Detalle de venta eliminado');

    }
}
