<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController; // Import ProfileController
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\CommentController;

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

// routes/web.php

Route::get('/', function () {
    return view('welcome', compact('comments'));
})->name('welcome');
Route::get('/welcome', 'CommentController@welcome')->name('welcome');

Route::get('/home', function () {
    return view('home');
});

Route::get('/welcome/about', function () {
    return view('about');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/customer-rating', function () {
    return view('customer-rating');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [ContactController::class, 'sendEmail'])->name('send.email');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/services', function () {
    return view('service_list');
})->name('services');
Route::middleware(['auth'])->group(function () {
    // Contoh rute yang hanya bisa diakses oleh pengguna yang sudah login
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::resource('comments', CommentController::class)->except(['show']);
Route::post('/add-comment', [CommentController::class, 'store'])->name('add.comment');
Route::get('/forum', [CommentController::class, 'index'])->name('forum');
Route::put('/comment/{id}/edit', [CommentController::class, 'edit'])->name('edit.comment');
Route::delete('/comment/{id}', [CommentController::class, 'destroy'])->name('delete.comment');


// Rute otentikasi yang dihasilkan oleh make:auth

Auth::routes();
