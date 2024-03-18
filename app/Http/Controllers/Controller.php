<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
* @OA\Info(
*             title="API test-backend-developer",
*             version="1.0",
*             description="Listado de URI's de la API test-backend-developer"
* )
*
* @OA\Server(url="http://127.0.0.1:8000")
*/

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
