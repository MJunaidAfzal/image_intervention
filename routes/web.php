<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductAjaxController;
use App\Http\Controllers\FrontenedController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\ImageController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', [PDFController::class, 'index'])->name('user');
Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('mypdf');

Route::controller(ImageController::class)->group(function(){
    Route::get('image-upload', 'index');
    Route::post('image-upload', 'store')->name('image.store');
});

Route::get('user-upload', [UserController::class, 'index']);
Route::post('import-user', [UserController::class, 'uploadExcel']);
Route::get('export-all', [UserController::class, 'exportExcel'])->name('export');

//crud
Route::resource('ajaxproducts', ProductAjaxController::class);

//append
Route::get('append' , [FrontenedController::class , 'append'])->name('pages.append');

//crud
Route::get('crud/delete/{id}' , [CrudController::class , 'delete'])->name('crud.delete');
Route::resource('crud' , CrudController::class);






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
