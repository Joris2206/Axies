<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ItemController; 
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

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
    return view('home/welcome');
})->middleware('auth');

Route::get('login', function () {
    if (Auth::check()) {
        return redirect('/home/welcome');
    }
    return view('auth/login');
});

Route::get('author/main/{user}', [ProfileController::class, 'show'])->name('author.main');

Route::get('items', [ItemController::class, 'index'])->middleware('auth');
Route::get('items/main/{item}', [ItemController::class, 'details'])->name('item.detail');
Route::get('items/itemCreate', [ItemController::class, 'Allindex'])->name('item.page')->middleware('auth');
Route::post('items/itemCreate', [ItemController::class, 'store'])->name('item.create');

Route::get('home/welcome', function () {
    $today = Carbon::today();

    $itemsToday = \App\Models\Item::whereDate('created_at', $today)->get();

    return view('home/welcome', compact('itemsToday'));
})->middleware(['auth', 'verified'])->name('welcome');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
