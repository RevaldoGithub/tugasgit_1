<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutsController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\BgbannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageaboutController;
use App\Http\Controllers\KateblogController;
use App\Http\Controllers\KateproController;
use App\Http\Controllers\KatewarController;
use App\Http\Controllers\KelebihanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MetamanagementController;
use App\Http\Controllers\OpenController;
use App\Http\Controllers\PortoController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ShowblogsController;
use App\Http\Controllers\ShowproductkategoriController;
use App\Http\Controllers\ShowproductwarnaController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestiController;
use App\Http\Controllers\WhyController;
use App\Models\Imageabout;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//BECK END
Route::resource('/dashboard', DashboardController::class)->middleware('auth');
Route::resource('/slider', SliderController::class)->middleware('auth');
Route::resource('/akun', AkunController::class)->middleware('auth');
Route::resource('/about', AboutController::class)->middleware('auth');
Route::resource('/imageabout', ImageaboutController::class)->middleware('auth');
Route::resource('/sejarah', SejarahController::class)->middleware('auth');
Route::resource('/product', ProductController::class)->middleware('auth');
Route::resource('/kelebihan', KelebihanController::class)->middleware('auth');
Route::resource('/blog', BlogController::class)->middleware('auth');
Route::resource('/open', OpenController::class)->middleware('auth');
Route::resource('/why', WhyController::class)->middleware('auth');
Route::resource('/service', ServiceController::class)->middleware('auth');
Route::resource('/benefit', BenefitController::class)->middleware('auth');
Route::resource('/porto', PortoController::class)->middleware('auth');
Route::resource('/price', PriceController::class)->middleware('auth');
Route::resource('/skill', SkillController::class)->middleware('auth');
Route::resource('/sponsor', SponsorController::class)->middleware('auth');
Route::resource('/team', TeamController::class)->middleware('auth');
Route::resource('/testimonial', TestiController::class)->middleware('auth');
Route::resource('/contact', ContactController::class)->middleware('auth');
Route::resource('/kateblog', KateblogController::class)->middleware('auth');
Route::resource('/katepro', KateproController::class)->middleware('auth');
Route::resource('/katewar', KatewarController::class)->middleware('auth');
Route::resource('/config', ConfigController::class)->middleware('auth');
Route::resource('/metamanagement', MetamanagementController::class)->middleware('auth');
Route::resource('/bgbanner', BgbannerController::class)->middleware('auth');


// Front End
Route::resource('/', HomeController::class);
Route::resource('/abouts', AboutsController::class);
Route::resource('/contacts', ContactsController::class);
Route::resource('/services', ServicesController::class);
Route::resource('/blogs', BlogsController::class);
Route::resource('/show-kategori-blog', ShowblogsController::class);
Route::resource('/products', ProductsController::class);
Route::resource('/show-kategori-product', ShowproductkategoriController::class);
Route::resource('/show-kategori-warna', ShowproductwarnaController::class);
// Login
Route::get('/panel', [LoginController::class, 'index'])->name('panel')->middleware('guest');
Route::post('/panel', [LoginController::class, 'authentication'])->name('authentication');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
