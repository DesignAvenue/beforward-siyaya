<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Models\Featured;
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
    $testimonial = Testimonials::all();
    $featuredProducts = Featured::all();
    return view('welcome')
    ->with('testimonial',$testimonial)
    ->with('featuredProducts', $featuredProducts);
});

Route::get('/contact',[PagesController::class, 'contactUs']);
Route::get('/',[PagesController::class, 'home']);
Route::get('/about',[PagesController::class, 'aboutUs']);



