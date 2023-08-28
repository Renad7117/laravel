<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\database;

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('project');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('/', function () {
//    return view('project');
//})->middleware(['auth', 'verified'])->name('project');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
Route::resource('database','databaseController');
Route::resource('tags','tagController');
});
Route::get('/database/{id}/user',function ($id) {
//  $databases = User::find($id)->post();
// return $databases ;
//});
    $user = User::find($id);
    foreach ($user->post as $post) {
        return $post->Title;
    }

});
Route::get('/tags/{id}/database',function ($id) {
 $tag = database::find($id);
    foreach ($tag->database as $database) {
        return $database->Title;
    }


});
Route::get('/alltag', function () {
    return view('tag');
});
require __DIR__.'/auth.php';
