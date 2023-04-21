<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/dados', function () {
    $dados = DB::table('tb_projeto_rouanet_teste')->get();
    return response()->json($dados);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
