<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */    /**
     * Listado de proveedores
     * @OA\Get (
     *     path="/api/getProveedores",
     *     tags={"Proveedor"},
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
     *                         property="rut_prov",
     *                         type="number",
     *                         example="12345678"
     *                     ),
     *                     @OA\Property(
     *                         property="nombre_prov",
     *                         type="string",
     *                         example="Osdalys"
     *                     ),
     *                     @OA\Property(
     *                         property="dir_prov",
     *                         type="string",
     *                         example="Calle 1, Avenida 2, Apartamento 3, Santiago"
     *                     ),
     *                     @OA\Property(
     *                         property="tel_prov",
     *                         type="string",
     *                         example="+575556666"
     *                     ),
     *                     @OA\Property(
     *                         property="pagina_web",
     *                         type="string",
     *                         example="paginaweb.com"
     *                     ),
     *                     @OA\Property(
     *                         property="pais_prov",
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



    public function getProveedores ()
    {
        $proveedores = Proveedor::all();
        return response()->json([
            'Proveedores' => $proveedores
        ]);
    }


    public function index()
    {
        $provs = Proveedor::select(['rut_prov', 'nombre_prov', 'dir_prov', 'tel_prov', 'pagina_web', 'pais_prov'])
                        ->paginate(8);
        return view ('proveedores', compact('provs'));
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
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedor $proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Proveedor $proveedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proveedor $proveedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedor $proveedor)
    {
        //
    }
}
