<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\DetailsController;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

Route::get('/one', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('user/index',function(){
    return view('dashboard');

})->name('users.index');
// require __DIR__.'/auth.php';
Route::middleware(['auth'])->group(function(){
    Route::resource('projects', App\Http\Controllers\ProjectController::class);
    Route::resource('tasks', App\Http\Controllers\TaskController::class);
    Route::resource('details', App\Http\Controllers\DetailsController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('articles', App\Http\Controllers\ArticleController::class)->middleware('auth');




