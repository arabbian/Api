<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BukuController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route :: get('/getmahasiswa',[MahasiswaController::class,'getmahasiswa']);
Route :: get('/getid/{id}',[MahasiswaController::class,'getid']);
Route :: post('/tambahmahasiswa',[MahasiswaController::class,'tambahmahasiswa']);
Route :: put('/updatemahasiswa/{id}',[MahasiswaController::class, 'updatemahasiswa']);
Route :: delete('/deletemahasiswa/{id}',[MahasiswaController::class, 'deletemahasiswa']);

Route :: get('/getbuku',[BukuController::class,'getbuku']);
Route :: get('/getbuku/{id}',[BukuController::class,'getbuku']);
Route :: post('/tambahbuku',[BukuController::class,'tambahbuku']);
Route :: put('/updatebuku/{id}',[BukuController::class, 'updatebuku']);
Route :: delete('/deletebuku/{id}',[BukuController::class, 'deletebuku']);