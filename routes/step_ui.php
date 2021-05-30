<?php
use App\Http\Controllers\StepUIController;
use Illuminate\Support\Facades\Route;

Route::resources([
    'StepUI' => StepUIController::class,
    'posts' => StepUIController::class,
]);  
Route::get('index2',[StepUIController::class,'index2']);
Route::get('index3',[StepUIController::class,'index3']);
Route::get('index24',[StepUIController::class,'index4']);

Route::get('store',[StepUIController::class,'store2']);
Route::get('store3',[StepUIController::class,'store3']);
Route::get('store4',[StepUIController::class,'store']);
