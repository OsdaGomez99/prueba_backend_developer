<?php

namespace App\Http\Controllers;

use App\Vendedor;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

         /**
     * Listado de vendedores
     * @OA\Get (
     *     path="/api/getVendedores",
     *     tags={"Vendedor"},
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
     *                         property="rut_ven",
     *                         type="number",
     *                         example="12345678"
     *                     ),
     *                     @OA\Property(
     *                         property="nombre_ven",
     *                         type="string",
     *                         example="Osdalys"
     *                     ),
     *                     @OA\Property(
     *                         property="apellido_ven",
     *                         type="string",
     *                         example="Gomez"
     *                     ),
     *                     @OA\Property(
     *                         property="dir_ven",
     *                         type="string",
     *                         example="Calle 1, Avenida 2, Apartamento 3, Santiago"
     *                     ),
     *                     @OA\Property(
     *                         property="tel_ven",
     *                         type="string",
     *                         example="+575556666"
     *                     ),
     *                     @OA\Property(
     *                         property="fecha_na_ven",
     *                         type="string",
     *                         example="1999-06-24"
     *                     ),
     *                     @OA\Property(
     *                         property="email_ven",
     *                         type="string",
     *                         example="osdalysgomez@mail.com"
     *                     ),
     *                     @OA\Property(
     *                         property="pais_ven",
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

     public function getVendedores ()
     {
        $vendedores = Vendedor::all();
        return response()->json([
            'Vendedores' => $vendedores
        ]);
     }


    public function index()
    {
        $vends = Vendedor::select(['rut_ven', 'nombre_ven', 'apellido_ven', 'dir_ven', 'tel_ven', 'fecha_na_ven', 'email_ven', 'pais_ven'])
                        ->paginate(8);
        return view ('vendedores', compact('vends'));
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
     * @param  \App\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendedor $vendedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendedor $vendedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendedor $vendedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendedor $vendedor)
    {
        //
    }
}
