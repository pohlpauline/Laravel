<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; ##Einbindung
use App\Http\Controllers\CommentController; 
use App\Http\Controllers\AboutController; 


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
### Resource erstellen ##

Route::resource('comment', CommentController::class);
Route::resource('user', UserController::class);
Route::resource('about', AboutController::class);


Route::get('/comment', [CommentController::class, 'index'])->name('comment.index');
Route::get('/erfahrung',[UserController::class,'show'])->name('user.show'); # zeigt mir zum test die return 1 an php artisan route:list --name=user [9]routes
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');


Route::get('/', function () {
    return view('home');
    
});




Route::get('/contact',function(){
        return view('contact');
});








Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
