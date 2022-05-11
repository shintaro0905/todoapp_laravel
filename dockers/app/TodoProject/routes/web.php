<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

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

Route::get('/', [TasksController::class, 'index'])->name('tasks.index');
// 詳細ページ
Route::get('/{id}', [TasksController::class, 'show'])->name('tasks.show');
// タスク追加
Route::get('/tasks/add', [TasksController::class, 'add'])->name('tasks.add');
// タスク追加-DBに値を入れる処理
Route::post('/tasks/add', [TasksController::class, 'store'])->name('tasks.store');
// タスク編集画面
Route::get('/tasks/edit/{id}', [TasksController::class, 'edit'])->name('tasks.edit');
// タスク更新処理
Route::post('tasks/edit/{id}', [TasksController::class, 'update'])->name('tasks.update');
// タスクを削除する
Route::post('tasks/delete/{id}', [TasksController::class, 'delete'])->name('tasks.delete');
