<?php

namespace App\Http\Controllers;

use App\Traits\Filterable;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

/**
 *  @OA\Info(
 *      title="API's BASE BACKEND",
 *      version="1.0.0",
 *      description="API's for base",
 * ),
 *   @OA\SecurityScheme(
 *     securityScheme="bearerAuth",
 *     in="header",
 *     name="Authorization",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT",
 * ),

 */
abstract class Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, Filterable;

}
