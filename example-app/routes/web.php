<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HolaController;
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
    return view('welcome');
});

Route::resource('client', ClientController::class); // Se crea de forma automatica varias rutas para aceder a los diferentes metodos de la clase
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/hola/{name}', [HolaController::class, 'index' ]);
Route::get('categoria', [CategoryController::class, 'getCategoria']);
Route::get('categoria/{id}', [CategoryController::class, 'getCategoriaId']);
Route::post('/addCategoria', [CategoryController::class, 'insertCategoria']);
Route::put('/updateCategoria/{id}', [CategoryController::class, 'updateCategoria']);
Route::delete('deleteCategoria/{id}', [CategoryController::class, 'deleteCategoria']);

require __DIR__.'/auth.php';
