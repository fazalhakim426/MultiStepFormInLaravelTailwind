<?php

use App\Http\Controllers\StepUIController;
use App\Models\StepUI;
use Illuminate\Support\Facades\Route;

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
    return redirect('StepUI');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::resources([
    'StepUI' => StepUIController::class,
    'posts' => StepUIController::class,
]);  
Route::get('stepUI/{id}',[StepUIController::class,'destroy']);

Route::get('index1',[StepUIController::class,'index1'])->name('index1');
Route::get('index2',[StepUIController::class,'index2'])->name('index2');
Route::get('index3',[StepUIController::class,'index3'])->name('index3');
Route::get('index4',[StepUIController::class,'index4'])->name('index4');

Route::post('store1',[StepUIController::class,'store1'])->name('store1');
Route::post('store2',[StepUIController::class,'store2'])->name('store2');
Route::post('store3',[StepUIController::class,'store3'])->name('store3');
Route::post('store4',[StepUIController::class,'store4'])->name('store4');

require __DIR__.'/auth.php';
