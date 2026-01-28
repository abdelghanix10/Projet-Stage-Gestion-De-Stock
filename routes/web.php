<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Auth\LogoutController;

use App\Http\Controllers\Auth\RegisterController;

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


Route::group(['middleware'=>['guest']],function (){
    Route::get('login',[LoginController::class,'index'])->name('login');
    Route::post('login',[LoginController::class,'login']);
    Route::get('register',[RegisterController::class,'index'])->name('register');
    Route::post('register',[RegisterController::class,'store']); 

});

Route::group(['middleware'=>['auth']],function (){
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('logout',[LogoutController::class,'index'])->name('logout');

    Route::get('categories',[CategoryController::class,'index'])->name('categories');
    Route::post('categories',[CategoryController::class,'store']);
    Route::put('categories',[CategoryController::class,'update']);
    Route::delete('categories',[CategoryController::class,'destroy']);

  

    Route::get('suppliers',[SupplierController::class,'index'])->name('suppliers');
    Route::get('supplier-display/{id}', [SupplierController::class, 'display'])->name('supplier-display');
    Route::get('add-supplier',[SupplierController::class,'create'])->name('add-supplier');
    Route::post('add-supplier',[SupplierController::class,'store']);
    Route::get('suppliers/{supplier}',[SupplierController::class,'show'])->name('edit-supplier');
    Route::delete('suppliers',[SupplierController::class,'destroy']);
    Route::put('suppliers/{supplier}}',[SupplierController::class,'update'])->name('edit-supplier');




    Route::get('employees',[EmployeeController::class,'index'])->name('employees');

    Route::get('employee-display/{id}', [EmployeeController::class, 'display'])->name('employee-display');

    Route::get('add-employee',[EmployeeController::class,'create'])->name('add-employee');
    Route::post('add-employee',[EmployeeController::class,'store']);
    Route::get('employees/{employee}',[EmployeeController::class,'show'])->name('edit-employee');
    Route::delete('employees',[EmployeeController::class,'destroy']);
    Route::put('employees/{employee}}',[EmployeeController::class,'update'])->name('edit-employee');



    Route::get('purchases',[PurchaseController::class,'index'])->name('purchases');

    Route::get('purchase-display/{id}', [PurchaseController::class, 'display'])->name('purchase-display');

    Route::get('add-purchase',[PurchaseController::class,'create'])->name('add-purchase');
    Route::post('add-purchase',[PurchaseController::class,'store']);
    Route::get('purchases/{purchase}',[PurchaseController::class,'show'])->name('edit-purchase');
    Route::put('purchases/{purchase}',[PurchaseController::class,'update']);
    Route::delete('purchases',[PurchaseController::class,'destroy']);



    Route::get('profile',[UserController::class,'profile'])->name('profile');
    Route::post('profile',[UserController::class,'updateProfile']);
    Route::put('profile',[UserController::class,'updatePassword'])->name('update-password');


});

Route::get('/', function () {
    return redirect()->route('dashboard');
});
