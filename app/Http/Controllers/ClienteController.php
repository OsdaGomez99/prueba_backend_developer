<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Listado de clientes
     * @OA\Get (
     *     path="/api/getClientes",
     *     tags={"Cliente"},
     *     @OA\Response(
     *         response=200,
     *         description="OK",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 type="array",
     *                 property="rows",
     *                 @OA\Items(
     *                     type="object",
     *                     @OA\Property(
     *                         property="id",
     *                         type="number",
     *                         example="1"
     *                     ),
     *                     @OA\Property(
     *                         property="rut_cliente",
     *                         type="number",
     *                         example="12345678"
     *                     ),
     *                     @OA\Property(
     *                         property="nombre_cliente",
     *                         type="string",
     *                         example="Osdalys"
     *                     ),
     *                     @OA\Property(
     *                         property="apellido_cliente",
     *                         type="string",
     *                         example="Gomez"
     *                     ),
     *                     @OA\Property(
     *                         property="dir_cliente",
     *                         type="string",
     *                         example="Calle 1, Avenida 2, Apartamento 3, Santiago"
     *                     ),
     *                     @OA\Property(
     *                         property="tel_cliente",
     *                         type="string",
     *                         example="+575556666"
     *                     ),
     *                     @OA\Property(
     *                         property="pais_cliente",
     *                         type="string",
     *                         example="Chile"
     *                     ),
     *                     @OA\Property(
     *                         property="created_at",
     *                         type="string",
     *                         example="2023-02-23T00:09:16.000000Z"
     *                     ),
     *                     @OA\Property(
     *                         property="updated_at",
     *                         type="string",
     *                         example="2023-02-23T12:33:45.000000Z"
     *                     )
     *                 )
     *             )
     *         )
     *     )
     * )
     */

    public function getClientes ()
    {
        $clientes = Cliente::all();
        return response()->json([
            'Clientes' => $clientes
        ]);
    }

    public function index()
    {
        $clientes = Cliente::select(['rut_cliente', 'nombre_cliente', 'apellido_cliente', 'dir_cliente', 'tel_cliente', 'pais_cliente'])
                        ->paginate(8);
        return view ('clientes', compact('clientes'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
