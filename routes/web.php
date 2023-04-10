<?php

use App\Http\Controllers\data_kontraktorController;
use App\Http\Controllers\KontraktorController;
use App\Http\Controllers\UserController;
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
    return view('auth.login');
});

// Route::group([ "middleware" => ['auth:sanctum', config('jetstream.auth_session'), 'verified'] ], function() {
    Route::get('/admin', 'AdminController@index')->name('admin.home');
    Route::view('/dashboard', "dashboard")->name('dashboard');
    Route::get('/daftar-kontraktor', [KontraktorController::class, 'index'])->name('daftarkontraktor');
    Route::get('/tambah-kontraktor', [KontraktorController::class, 'create'])->name('createkontraktor');
    Route::post('/insert-kontraktor', [KontraktorController::class, 'insert'])->name('insertkontraktor');
    Route::get('/edit-kontraktor/{id}', [KontraktorController::class, 'edit'])->name('editkontraktor');
    Route::post('/update-kontraktor/{id}', [KontraktorController::class, 'update'])->name('updatekontraktor');
    Route::get('/delete-kontraktor/{id}', [KontraktorController::class, 'delete'])->name('deletekontraktor');
    




    Route::get('/user', [ UserController::class, "index_view" ])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');
    Route::get('/datakontraktor', [data_kontraktorController::class, "index"])->name('data.index');
// });
