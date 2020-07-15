<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ControllerFormulario@index');
Route::post('submit-formulario', 'ControllerFormulario@irSubmit');
