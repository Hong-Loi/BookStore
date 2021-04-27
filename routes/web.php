<?php
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\lacontrol;

use App\Http\Controllers\TemplateController;


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

Route::get('/',[TemplateController::class,'index']);
Route::get('/contactus.blade.php',[TemplateController::class,'contactus']);
Route::get('/404error.blade.php',[TemplateController::class,'r404error']);
Route::get('/aboutus.blade.php',[TemplateController::class,'aboutus']);
Route::get('/authors.blade.php',[TemplateController::class,'authors']);
Route::get('/authordetail.blade.php',[TemplateController::class,'authordetail']);
Route::get('/comingsoon.blade.php',[TemplateController::class,'comingsoon']);////////////////
Route::get('/index-2.blade.php',[TemplateController::class,'index_2']);
Route::get('/indexv3.blade.php',[TemplateController::class,'indexv3']);
Route::get('/newsdetail.blade.php',[TemplateController::class,'newsdetail']);
Route::get('/indexv2.blade.php',[TemplateController::class,'indexv2']);
Route::get('/newsgrid.blade.php',[TemplateController::class,'newsgrid']);
Route::get('/newslist.blade.php',[TemplateController::class,'newslist']);
Route::get('/productdetail.blade.php',[TemplateController::class,'productdetail']);
Route::get('/products.blade.php',[TemplateController::class,'products']);
// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


//Using veritification email
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');



Route::get('/',[lacontrol::class,'index']);

