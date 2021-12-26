<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Models\Testimonials;

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
    $testimonials = Testimonials::all();
    $featuredProducts = Featured::all();
    return view('welcome')
    ->with('testimonials', $testimonials)
    ->with('featured_products', $featuredProducts);
});

Route::get('/contact',[PagesController::class, 'contactUs']);
Route::get('/',[PagesController::class, 'home']);
Route::get('/about',[PagesController::class, 'aboutUs']);



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
