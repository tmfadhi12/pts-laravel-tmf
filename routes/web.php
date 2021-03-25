<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

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
    return view('index');
});

Route::get('/karyawan', [KaryawanController::class, "index"]);
Route::post('karyawan/import', [KaryawanController::class, 'import']);
Route::get('karyawan/export/csv', [KaryawanController::class, 'exportCsv']);
Route::get('karyawan/export/xlsx', [KaryawanController::class, 'exportXlsx']);
Route::get('karyawan/export/pdf', [KaryawanController::class, 'exportPdf']);
Route::get('karyawan/import/file', [KaryawanController::class, 'importFile']);
Route::post('karyawan/destroy/{id}', [KaryawanController::class, 'destroy']);
Route::get('karyawan/addData', [KaryawanController::class, 'create']);
Route::post('karyawan/savedata', [KaryawanController::class, 'store']);
Route::get('karyawan/edit/{id}', [KaryawanController::class, 'edit']);
Route::post('karyawan/update', [KaryawanController::class, 'update']);
