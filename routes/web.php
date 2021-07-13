<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [PostController::class, 'index'])->name('dashboard');
Route::post('/post', [PostController::class, 'store'])->name('post');
Route::delete('/delete/{item:id}',  [PostController::class, 'destroy']);
Route::get('/update/{item:id}', [PostController::class, 'edit']);
Route::patch('/update/{post:id}', [PostController::class, 'update'])->name('post.update');


require __DIR__ . '/auth.php';
