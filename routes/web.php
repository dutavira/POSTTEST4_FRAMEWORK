<?php

use App\Http\Controllers\AuthConntroller;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\MinumanController;
use App\Models\Minuman;
use Illuminate\Support\Facades\Route;
use App\Models\Makanan;

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
    return view('menu.index',
        ["makanans" => Makanan::all()], 
        ["minumen" => Minuman::all()]
    );
})->middleware(['auth']);

Route::get('/register', function(){
    return view('register');
})->name("register");

Route::post('/action-register',[
    AuthConntroller::class, 'actionRegister'
]);

Route::get('/login', [
    AuthConntroller::class, 'loginView'
])->name("login");

Route::post('/action-login', [
    AuthConntroller::class, 'actionLogin'
]);

Route::get('/logout', [
    AuthConntroller::class, 'logout'
]);

Route::get('/makanan', [MakananController::class, 'index'])->name('menu.index');
Route::get('/minuman', [MinumanController::class, 'index'])->name('menu.index');
//create
Route::get('/menu/create_mk', [MakananController::class, 'create']);
Route::get('/menu/create_mn', [MinumanController::class, 'create']);
Route::post('/makanan/store', [MakananController::class, 'store']);
Route::post('/minuman/store', [MinumanController::class, 'store']);
//show
Route::get('makanan/show/{id}', [MakananController::class, 'show'])->name('menu.read_mk');
Route::get('minuman/show/{id}', [MinumanController::class, 'show'])->name('menu.read_mn');
