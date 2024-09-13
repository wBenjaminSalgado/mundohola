<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login\frmRegistroCtrl;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/formulario-registro", [frmRegistroCtrl::class, "mostrarDatos"]);
//Route::get('/formulario-registro');