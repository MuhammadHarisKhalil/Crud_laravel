<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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
    return redirect()->route('login');
});
// using Middleware on dashboard
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [ContactController::class,'index'])->name('dashboard');
// using Middleware on add data
Route::middleware(['auth:sanctum', 'verified'])->get('/add',[ContactController::class,'create'])->name('useradd');
// using for Store Data
Route::post('/dashboard', [ContactController::class, 'store']);
// using for edit View
Route::get('/contact/{contact}/edit', [ContactController::class, 'edit'])->name('edit');
//using for save changing
Route::put('/contact/{contact}', [ContactController::class, 'update']);
//using for Delete the data
Route::delete('/contact/{contact}/delete', [ContactController::class, 'destroy']);
// using for logout the User
Route::post('logout', [ContactController::class, 'logout'])->name('logout');

