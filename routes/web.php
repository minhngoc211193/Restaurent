<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\TableresController;


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
Route::resources([
    'types' => TypeController::class
    ]
);
Route::resources([
    'foods' => FoodController::class
    ]
);
Route::resources([
    'tablereses' => TableresController::class
]);
Route::resources([
    'employees' => EmployeeController::class
]);
Route::get('/search', [FoodController::class, 'search'])->name('search');

