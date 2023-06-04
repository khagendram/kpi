<?php

use App\Http\Controllers\Inventory\category;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//url:/inventory/innentory/list
//url:/inventory/innentory/add
//url:/inventory/innentory/edit

Route::get("/inventory/category/add",[category::class, "add"])->name("inventory.category.add");

Route::get("/inventory/category/edit",[category::class, "edit"])->name("inventory.category.edit");

Route::post("/inventory/category/Editpost",[category::class, "Editpost"]);

Route::get("/inventory/category",[category::class, "index"])->name("inventory.category.index");

Route::get("/inventory/category/menu",[category::class, "menu"])->name("inventory.category.menu");

route::post("/inventory/category/adddata",[category::class,"adddata"]);

Route::get("/inventory/category", [category::class,"index"]);

route::get("inventory/category/delete",[category::class,"delete"]);




});

require __DIR__.'/auth.php';
