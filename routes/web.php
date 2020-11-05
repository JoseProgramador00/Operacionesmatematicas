<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request as HttpRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sumar', function () {
    return view('operaciones.Sumar');
});
Route::post('sumar', function (HttpRequest $request) {
    $sumar= $request->numero1+$request->numero1;
    $request->offsetSet('sumar',$sumar);
    return view('resultados.resultado',['resultado'=> $sumar]);
});

Route::get('/restar', function () {
    return view('operaciones.Restar');
});

Route::post('restar', function (HttpRequest $request) {
    $restar= $request->numero1-$request->numero2;
    $request->offsetSet('restar',$restar);
    return view('resultados.resultado2',['resultado2'=> $restar]);
});

Route::get('multiplicar', function () {
    return view('operaciones.Multiplicar');
});

Route::post('multiplicar', function (HttpRequest $request) {
    $multiplicar= $request->numero1*$request->numero2;
    $request->offsetSet('multiplicar',$multiplicar);
    return view('resultados.resultado3',['resultado3'=> $multiplicar]);
});

Route::get('dividir', function () {
    return view('operaciones.Dividir');
});

Route::post('dividir', function (HttpRequest $request) {
    $dividir= $request->numero1/$request->numero2;
    $request->offsetSet('dividir',$dividir);
    return view('resultados.resultado4',['resultado4'=> $dividir]);
});
