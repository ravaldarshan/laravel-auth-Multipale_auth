<?php

use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Authorization;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\Authenticate;

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

Auth::routes();




//laravel permisstion
Route::get('/set-role',[RoleController::class,'create'])->name('set-role');

//products route
Route::get('/products',[HomeController::class,'products'])->name('products');



Route::get('/admin/login',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin',[LoginController::class,'adminLogin'])->name('admin.login');
Route::post('/admin/logout',[LoginController::class,'adminLogout'])->name('admin.logout');

Route::get('/admin/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');

Route::get('/posts',[Authorization::class,'index'])->name('posts.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/post', [Authorization::class, 'show'])
            ->name('post.show')
            ->middleware('can:user');
        Route::get('/post/edit', [Authorization::class, 'edit'])
            ->name('post.edit')
            ->middleware('can:admin');

Route::get('/admin/dashboard',function(){
    return view('admin');
})->middleware('auth:admin');

Route::get('/test',function(){
    return view('home');
});