<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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

Route::get('/',[NewsController::class,'clientindex']);

Route::get('/maosh', function () {
    return view('client.yuqori_maosh');
});
Route::get('/404', function () {
    return view('client.karyera');
});
Route::get('/faq', function () {
    return view('client.faq');
});
Route::get('/team', function () {
    return view('client.mehnat');
});
Route::get('/about', function () {
    return view('client.about');
});
Route::get('/pragnoz', function () {
    return view('client.prognoz');
});

Route::prefix('statistic')->group(function (){
    Route::get('/index', function () {
        return view('client.statistika.bozorxolati');
    });
});


Route::prefix('admin')->group(function (){
    Route::resource('news', NewsController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
