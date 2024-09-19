<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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


Route::get('posts', [PostController::class, 'index'])->name('posts.index'); // عرض جميع المنشورات
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create'); // عرض نموذج إضافة منشور
Route::post('posts', [PostController::class, 'store'])->name('posts.store'); // تخزين منشور جديد
Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit'); // عرض نموذج تعديل منشور
Route::put('posts/{id}', [PostController::class, 'update'])->name('posts.update'); // تحديث منشور
Route::delete('posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy'); // حذف منشور
