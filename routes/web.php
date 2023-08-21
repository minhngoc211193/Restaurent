<?php

use App\Http\Controllers\AuthenticateController;
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
Route::group([ 'middleware'=> ['auth', 'only']], function(){
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
});
Route::get('/search', [FoodController::class, 'search'])->name('search');

Route::get('login', [AuthenticateController::class, 'loginIndex'])->name('login');

Route::post('login', [AuthenticateController::class, 'login']);

Route::get('register', [AuthenticateController::class, 'registerIndex'])->name('register');

Route::post('register', [AuthenticateController::class, 'register']);

Route::post('logout', [AuthenticateController::class, 'logout'])->name('logout');
// CSRF Bảo vệ: Sử dụng phương thức POST cùng với kiểm tra CSRF (Cross-Site Request Forgery) token 
// giúp bảo vệ khỏi các cuộc tấn công CSRF. CSRF là một cuộc tấn công trong đó người tấn công thực hiện các hành 
// động trên tài khoản của người dùng mà họ đã đăng nhập mà không cần sự cho phép.Sử dụng POST cùng 
// với CSRF token giúp ngăn chặn cuộc tấn công này.
Route::get('/admin', function(){
    return view('employee.index');
})->middleware('role:admin');
