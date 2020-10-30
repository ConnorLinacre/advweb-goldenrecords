<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourDateController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/editprofile', function () {
        return view('edit_profile');
    })->name('edit_profile');

    Route::post('/editprofile', function(Request $request) {
        Auth::user()->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);
        return redirect()->route('home');
    });

    Route::get('/edittour/{tourDate}', [TourDateController::class, 'edit'])->name('edit_tour');
    Route::post('/edittour/{tourDate}', [TourDateController::class, 'update'])->name('edit_tour');
    Route::get('/createtour', [TourDateController::class, 'create'])->name('create_tour');
    Route::post('/createtour', [TourDateController::class, 'store'])->name('create_tour');
    Route::post('/deletetour/{tourDate}', [TourDateController::class, 'destroy'])->name('delete_tour');
    Route::get('/showtour/{tourDate}', [TourDateController::class, 'show'])->name('show_tour');
});
