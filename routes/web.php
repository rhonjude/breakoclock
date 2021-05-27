<?php
use App\Http\Controllers\productviewController;
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

Route::group(['middleware' => 'prevent-back-history'],function(){
    
  

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'],function(){

Route::get('redirects','HomeController@index');

Route::resource('/products','App\Http\Controllers\ProductController');
Route::resource('/suppliers','App\Http\Controllers\SupplierController');
Route::resource('/staffs','App\Http\Controllers\StaffController');
Route::resource('/companies','App\Http\Controllers\CompanyController');
Route::resource('/transactions','App\Http\Controllers\TransactionController');
Route::resource('/categories','App\Http\Controllers\CategoryController');
Route::resource('/productviews','productviewController');
Route::post('/add_to_cart',[productviewController::class,'addToCart']);
Route::get('/cartlist',[productviewController::class,'cartList']);
Route::get("removecart/{id}",[productviewController::class,'removeCart']);
Route::get("ordernow",[productviewController::class,'orderNow']);
Route::post("orderplace",[productviewController::class,'orderPlace']);
Route::get("myorders",[productviewController::class,'myOrders']);
Route::get("orderviewadmin",[productviewController::class,'orderViewAdmin']);
Route::get("paymentstatus/{id}",[productviewController::class,'paymentStatus']);
Route::get("ordercancel/{id}",[productviewController::class,'orderCancel']);
Route::get("completedorders",[productviewController::class,'completedOrders']);

});

});