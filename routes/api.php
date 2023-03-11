<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UploadController;
	
use App\Http\Controllers\API\MultipleUploadController;
 
Route::post('/olo', [MultipleUploadController::class, 'upload']);

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
Route::post("/login", [AuthController::class,'login']);
Route::get("/getAllProducts", [ProductController::class,'getAllProducts']);
Route::post("/upload", [UploadController::class,'upload']);
Route::middleware('auth:sanctum')->group(function(){
    Route::get("/test", [ProductController::class,'test']);
    
    Route::get("/getOneProduct/{id}", [ProductController::class,'getOneProduct']);
    Route::post("/addProduct", [ProductController::class,'addProduct']);
    Route::delete("/deleteProduct/{id}", [ProductController::class,'deleteProduct']);
    Route::put("/updateProduct/{id}", [ProductController::class,'updateProduct']);
});
// Product