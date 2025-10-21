<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\YearController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DepartmentController;



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

Route::get('/',function(){
    return view('welcome');
});



Route::get('/teacher/login',function(){
    return view('auth.teacherlogin');
})->name('teacher.login');

Route::post('/teacher/login', [LoginController::class, 'teacherLogin'])->name('teacher.login.post');


Route::get('/student/login',function(){
    return view('auth.studentlogin');
})->name('student.login');

Route::post('/student/login', [LoginController::class, 'studentLogin'])->name('student.login.post');


Route::get('/admin/login',function(){
    return view('auth.adminlogin');
})->name('admin.login');

Route::post('/admin/login', [LoginController::class, 'adminLogin'])->name('admin.login.post');

// Route::get('/', function () {
//     return view('dashboard/index');
// })->middleware('auth');

Auth::routes();

// Grouping routes that need authentication
// Route::middleware(['auth'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
//     Route::resource('year', YearController::class);
//     Route::resource('department', DepartmentController::class);
//     Route::resource('user', UserController::class);
//     Route::resource('score', ScoreController::class);
//     Route::resource('timetable', TimetableController::class);
//     Route::resource('result', ResultController::class);
//     Route::resource('news', NewsController::class);
// });

Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('year', YearController::class);
    Route::resource('department', DepartmentController::class);
    Route::resource('user', UserController::class);
    Route::resource('score', ScoreController::class);
    Route::resource('timetable', TimetableController::class);
    Route::resource('result', ResultController::class);
    Route::resource('news', NewsController::class);
    Route::resource('assignment', AssignmentController::class);

    // Blogs
    Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::post('blogs', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');

    // Comments
    Route::post('blogs/{blog}/comment', [CommentController::class, 'store'])->name('comments.store');
    Route::get('comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
    Route::put('comments/{comment}', [CommentController::class, 'update'])->name('comments.update');
    Route::delete('comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');


