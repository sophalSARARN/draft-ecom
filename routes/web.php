<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AboutSiteController;
use App\Http\Controllers\ContactCtroller;
use Illuminate\Support\Facades\Route;

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

Route::get('contact', function () {
    return view('components.contact.contact_us');
});

// Route::get('/p_detail', function () {
//     return view('components.dashbord.products.product_detail');
// });

// routes/web.php
Route::post('language-switch', [LanguageController::class, 'switchLanguage'])->name('language.switch');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// About us

Route::group(['middleware' => ['web']], function () {
    Route::get('/about', [AboutSiteController::class, 'index'])->name('about.index');
});

// About us

Route::post('/contact-us', [ContactController::class, 'create'])->name('contact_us.create');


Route::middleware('auth')->group(function () {
    // profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // abo ut
    
    Route::group(['middleware' => ['web']], function () {
        // Route to display the about page
        // Route::get('/dashboard', [AboutSiteController::class, 'show'])->name('about_data.show');

        // Route to handle form submissions
        Route::post('/about-site', [AboutSiteController::class, 'edit'])->name('about_site.edit');

        });
    });

require __DIR__.'/auth.php';
