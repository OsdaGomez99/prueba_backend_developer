<?php

namespace App\Http\Controllers;

use App\DetalleVenta;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class DetalleVentaController extends Controller
{
    /**
 * Crear un nuevo detalle de venta
 * @OA\Post(
 *     path="/api/createDetalleVenta",
 *     tags={"DetalleVenta"},
 *     summary="Crear un nuevo detalle de venta",
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             @OA\Property(property="id_venta", type="number", example="1"),
 *             @OA\Property(property="id_producto", type="number", example="2"),
 *             @OA\Property(property="cantidad", type="number", example="30"),
 *             @OA\Property(property="precio_unitario", type="number", example="567.00"),
 *         ),
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="Detalle de Venta creado exitosamente",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Detalle de Venta creado correctamente")
 *         )
 *     ),
 *     @OA\Response(
 *         response=422,
 *         description="Error de validación",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Error en los datos enviados")
 *         )
 *     )
 * )
 */

 public function createDetalleVenta (Request $request)
 {

     //Intento de realizar el proceso de creación
     try {
         //Validación de los datos del request
         $validatedData = $request->validate([
            'id_venta' => 'required|integer|min:1|max:100',
            'id_producto' => 'required|integer|min:1|max:1000',
            'cantidad' => 'required|integer|min:1|max:9999',
            'precio_unitario' => 'required|integer|min:1|max:99999',
         ]);

         //Creación de la venta
         $detalle = DetalleVenta::create([
             'id_venta' => $validatedData['id_venta'],
             'id_producto' => $validatedData['id_producto'],
             'cantidad' => $validatedData['cantidad'],
             'precio_unitario' => $validatedData['precio_unitario'],
             'subtotal' => $validatedData['precio_unitario'] * $validatedData['cantidad']
         ]);

     //De haber datos mal ingresados, muestra un error
     } catch (ValidationException $e) {
         return response()->json([
             'error' => 'Datos invalidos',
             'message' => $e->getMessage(),
             'errors' => $e->errors()
         ], 400);
     }

     //Retorna el detalle de venta creado. De caso contrario, muestra un error
     if ($detalle) {
         return response()->json([
             'message' => 'Detalle de Venta creado',
             'Detalle de Venta' => $detalle
         ], 201);
     } else {
         return response()->json([
             'message' => 'Detalle de Venta no creado',
         ], 400);
     }
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
