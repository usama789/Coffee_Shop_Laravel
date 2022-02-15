<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\UserApi;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\RolePermissionController;

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
Auth::routes();
Route::get('/', array('as'=>'/',function(){
    return view('welcome');
}));
Route::get('/createorder', function () {
    return view('createorder');
});
Route::get('/login',array('as'=>'login',function(){
    return view('login');
}));
Route::get('/list',[OrdersController::class,'GetOrders']);
Route::post('/api/register',[UserApi::class,'register']);
Route::post('/api/login',[UserApi::class,'userLogin']);
Route::post('/api/user',[UserApi::class,'create']);
Route::get('/api/user',[UserApi::class,'get']);
Route::get('/api/user/{id}',[UserApi::class,'getbyid']);
Route::put('/api/updateuser/{id}',[UserApi::class,'update']);
Route::delete('/api/user/{id}',[UserApi::class,'delete']);

Route::get("/profile",[HomeController::class,'index']);
Route::view("/register",'register');
Route::get("/logout",function(){
    if(session() -> has('user')){
        session()->flush();
    }
    return redirect('login');
});
// ORDER ROUTES 
Route::post('/api/order',[OrdersController::class,'addOrder']);
Route::get('/api/order',[OrdersController::class,'GetOrders']);
Route::post('/orderpayment',[OrdersController::class,'addPayment']);
Route::get('/api/order/status/{id}',[OrdersController::class,'editStatus']);
Route::get('/orderpayment/{id}',[OrdersController::class,'getOrderPayment']);

//ROLES ROUTES
Route::post('/api/roles',[RolesController::class,'addRole']);


//PERMISSIONS ROUTES

Route::post('/api/permissions',[PermissionsController::class,'addPermission']);

//ROLE HAS PERMISSION ROUTES

Route::post('/api/rolepermission',[RolePermissionController::class,'RolePermission']);
