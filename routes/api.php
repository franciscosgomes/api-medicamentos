<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicamentoController;

Route::middleware('api')->group(function () {
    Route::apiResource('/medicamentos', MedicamentoController::class);
});
