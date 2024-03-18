<?php

namespace App\Http\Controllers;

use App\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        /**
     * Listado de sucursales
     * @OA\Get (
     *     path="/api/getSucursales",
     *     tags={"Sucursal"},
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
     *                         property="pais",
     *                         type="string",
     *                         example="Chile"
     *                     ),
     *                     @OA\Property(
     *                         property="moneda",
     *                         type="string",
     *                         example="CLP"
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

    public function getSucursales ()
    {
        $sucursales = Sucursal::all();
        return response()->json([
            'Sucursales' => $sucursales
        ]);
    }


    public function index()
    {
        //
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
     * @param  \App\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function show(Sucursal $sucursal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function edit(Sucursal $sucursal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sucursal $sucursal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sucursal $sucursal)
    {
        //
    }
}
