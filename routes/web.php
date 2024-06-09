<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MateriController;
use Illuminate\Support\Facades\File;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/kelas', function () {
    return view('kelas');
})->name('kelas');

Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
Route::post('/kelas', [KelasController::class, 'store'])->name('kelas.store');
Route::get('/kelas/{id}', [KelasController::class, 'show'])->name('kelas.show');
Route::delete('/kelas/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');

Route::resource('materi', MateriController::class);
Route::get('/materi', [MateriController::class, 'index'])->name('materi.index');
Route::get('/materi/create', [MateriController::class, 'create'])->name('materi.create');
Route::post('/materi', [MateriController::class, 'store'])->name('materi.store');
Route::get('/materi/{id}', [MateriController::class, 'show'])->name('materi.show');
Route::get('/materi/{id}/edit', [MateriController::class, 'edit'])->name('materi.edit');
Route::put('/materi/{id}', [MateriController::class, 'update'])->name('materi.update');
Route::delete('/materi/{id}', [MateriController::class, 'destroy'])->name('materi.destroy');


Route::get('/download/{filename}', function ($filename) {
    $path = storage_path('app/public/materi_files/' . $filename);
    if (!File::exists($path)) {
        abort(404);
    }
    return response()->download($path);
});