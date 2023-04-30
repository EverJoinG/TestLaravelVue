<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
*/

 Route::get('/message', function () {

    $first = [
        "attachTo"=>["element"=>"#users"],
        "content"=>[ "title"=> "¡primer paso!", "description"=> "Este es el primer paso para la creacion"]
    ];

    $second = [
        "attachTo"=>["element"=>"#recurso_usuario"],
        "content"=>[ "title"=> "¡segundo paso!", "description"=> "Este es el listados de usuarios registrados"]
    ];

    $thirst = [
        "attachTo"=>["element"=>"#created_user"],
        "content"=>[ "title"=> "¡tercer paso!", "description"=> "Boton para la creacion de usuarios" ]
    ];
     return response()->json([$first, $second, $thirst]);
});
