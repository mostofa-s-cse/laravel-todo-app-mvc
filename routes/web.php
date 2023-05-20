<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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
// Route::get('about', function () {
//     return view('about');
// });
Route::get('todos', [TodoController::class, 'index']);
Route::get('todos/{todo}', [TodoController::class, 'show']);
Route::get('create-todos', [TodoController::class, 'create']);
Route::post('store-todos',[TodoController::class, 'store']);
Route::get('todos/{todo}/edit',[TodoController::class, 'edit']);
Route::post('todos/{todo}/update-todos',[TodoController::class, 'update']);