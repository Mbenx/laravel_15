<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\InventoryController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// Route::get('/', [HomeController::class, 'index']);
// Route::get('/home', [HomeController::class, 'index']);
// Route::get('/dashboard', [HomeController::class, 'index']);

Route::get('/', [HomeController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/home', [HomeController::class, 'index'])->middleware(['auth'])->name('dashboard');
// Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/department', [DepartmentController::class, 'index'])
    ->middleware(['auth'])->name('department');
Route::get('/department/create', [DepartmentController::class, 'create'])
    ->middleware(['auth'])->name('departmentCreate');
Route::post('/department/store', [DepartmentController::class, 'store'])
    ->middleware(['auth'])->name('departmentStore');
Route::get('/department/edit/{id}', [DepartmentController::class, 'edit'])
    ->middleware(['auth'])->name('departmentEdit');
Route::put('/department/update', [DepartmentController::class, 'update'])
    ->middleware(['auth'])->name('departmentUpdate');
Route::get('/department/delete/{id}', [DepartmentController::class, 'destroy'])
    ->middleware(['auth'])->name('departmentDestroy');
Route::get('/department/show/{id}', [DepartmentController::class, 'show'])
    ->middleware(['auth'])->name('departmentShow');


Route::get('/position', [PositionController::class, 'index']);
Route::get('/position/create', [PositionController::class, 'create']);
Route::post('/position/store', [PositionController::class, 'store']);
Route::get('/position/edit/{id}', [PositionController::class, 'edit']);
Route::put('/position/update', [PositionController::class, 'update']);
Route::get('/position/delete/{id}', [PositionController::class, 'destroy']);

Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/employee/create', [EmployeeController::class, 'create']);
Route::post('/employee/store', [EmployeeController::class, 'store']);
Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit']);
Route::put('/employee/update', [EmployeeController::class, 'update']);
Route::get('/employee/delete/{id}', [EmployeeController::class, 'destroy']);
Route::get('/employee/show/{id}', [EmployeeController::class, 'show']);

Route::get('/archive', [ArchiveController::class, 'index']);
Route::get('/archive/create', [ArchiveController::class, 'create']);
Route::post('/archive/store', [ArchiveController::class, 'store']);
Route::get('/archive/edit/{id}', [ArchiveController::class, 'edit']);
Route::put('/archive/update', [ArchiveController::class, 'update']);
Route::get('/archive/delete/{id}', [ArchiveController::class, 'destroy']);

Route::get('/inventory', [InventoryController::class, 'index']);
Route::get('/inventory/create', [InventoryController::class, 'create']);
Route::post('/inventory/store', [InventoryController::class, 'store']);
Route::get('/inventory/edit/{id}', [InventoryController::class, 'edit']);
Route::put('/inventory/update', [InventoryController::class, 'update']);
Route::get('/inventory/delete/{id}', [InventoryController::class, 'destroy']);
Route::get('/inventory/show/{id}', [InventoryController::class, 'show']);

require __DIR__.'/auth.php';
