<?php

use App\Http\Controllers\Api\AccessController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\EpicController;
use App\Http\Controllers\Api\GrupoMenuController;
use App\Http\Controllers\Api\OptionMenuController;
use App\Http\Controllers\Api\StoryController;
use App\Http\Controllers\Api\TypeUserController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/login', [AuthenticationController::class, 'login_admin']);
Route::group(["middleware" => ["auth:sanctum"]], function () {

    require __DIR__ . '/Apis/AuthApi.php';        //AUTHENTICATE
    require __DIR__ . '/Apis/PersonApi.php';      //PERSON
    require __DIR__ . '/Apis/UserApi.php';        //USER
    require __DIR__ . '/Apis/RolApi.php';         //ROL
    require __DIR__ . '/Apis/PermissionApi.php';  //PERMISSIONS
    require __DIR__ . '/Apis/ProductApi.php';  //PRODUCTS
});
