<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\AminDashbordComponent;
use App\Http\Livewire\User\UserDashbordComponent;
use Laravel\Fortify\Fortify;
use App\Models\Service;
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

//login and register views
Fortify::loginView(function () {
    $listService=Service::where(['status'=>1])
    ->get(); 
    return view('auth.login',['list'=>$listService]);
});

Fortify::registerView(function () {
    $listService=Service::where(['status'=>1])
    ->get(); 
    return view('auth.register',['list'=>$listService]);
});


//Price
Route::resource('price',App\Http\Controllers\PriceController::class);
//Details

Route::get('detail/service/{id}',[App\Http\Controllers\DetailsController::class,'ajouter']);
Route::resource('detail',App\Http\Controllers\DetailsController::class);

//ContactController
Route::post('send-mail',[App\Http\Controllers\ContactController::class,'send']);

//devisController
Route::get('demanderdevis/unactivate/{id}',[App\Http\Controllers\DevisController::class,'unactivate']);

Route::post('/devis',[App\Http\Controllers\DevisController::class,'devis']);
Route::resource('demanderdevis',App\Http\Controllers\DevisController::class);

//IndexController
Route::get('/temoignage',[App\Http\Controllers\IndexController::class,'temoignage']);
Route::get('/Service/{id}',[App\Http\Controllers\IndexController::class,'sousservice']);
Route::get('/details/{id}',[App\Http\Controllers\IndexController::class,'detailservice']);
Route::get('/detailservice/{id}',[App\Http\Controllers\IndexController::class,'details']);
Route::get('/ToutLesServices',[App\Http\Controllers\IndexController::class,'service']);
Route::get('/aproposnous',[App\Http\Controllers\IndexController::class,'apropos']);
Route::get('/tarifs',[App\Http\Controllers\IndexController::class,'pricing']);
Route::post('send-comment',[App\Http\Controllers\ReviewController::class,'comment']);
Route::get('/contacteznous',[App\Http\Controllers\IndexController::class,'contactez']);
Route::resource('/',App\Http\Controllers\IndexController::class);

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashbord',UserDashbordComponent::class)->name('user.dashboard');
});

Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function () {
    Route::get('/admin/dashbord',AminDashbordComponent::class)->name('admin.dashboard');

});

// services Routes
Route::get('service/deleteimage/{id}',[App\Http\Controllers\ServiceController::class, 'deleteImage']);
Route::get('service/activate/{id}', [App\Http\Controllers\ServiceController::class, 'activate']);
Route::get('service/unactivate/{id}', [App\Http\Controllers\ServiceController::class, 'unactivate']);
Route::get('service/create/{id}', [App\Http\Controllers\ServiceController::class, 'ajouter']);
Route::get('service/list/{id}', [App\Http\Controllers\ServiceController::class, 'detail']);

Route::resource('service',App\Http\Controllers\ServiceController::class);



Route::get('slider/activate/{id}', [App\Http\Controllers\SliderController::class, 'activate']);
Route::get('slider/unactivate/{id}', [App\Http\Controllers\SliderController::class, 'unactivate']);

Route::resource('slider',App\Http\Controllers\SliderController::class);


Route::resource('partner',App\Http\Controllers\PartnerController::class);

Route::resource('subscriber',App\Http\Controllers\SubscriberController::class);



