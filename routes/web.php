<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('users.home');
});



Auth::routes();

Route::middleware(['user_log'])->group(function () {

Route::get('/',[UserController::class, 'home'])->name('users.home');
Route::get('jobs',[UserController::class, 'jobs'])->name('users.jobs');
Route::get('employer', [UserController::class, 'employer'])->name('users.employer');
Route::get('job_blogs', [UserController::class, 'blogs'])->name('users.blogs');
Route::get('aboutus', [UserController::class, 'aboutus'])->name('users.aboutus');
Route::get('services', [UserController::class, 'services'])->name('users.services');
Route::get('contact', [UserController::class, 'contactus'])->name('users.contactus');
Route::get('/jobspreview', [UserController::class, 'blogpreview'])->name('users.blogpreview');
});

Route::middleware(['auth','user-access:1'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});


Route::get('/admin_dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin_jobcategory', [AdminController::class, 'jobcategory'])->name('admin.jobcategory');
Route::get('/admin_jobs', [AdminController::class, 'jobs'])->name('admin.jobs');
Route::get('/admin_forms', [AdminController::class, 'forms'])->name('admin.forms');
Route::get('/admin_questions', [AdminController::class, 'questions'])->name('admin.questions');
Route::get('/admin_answers', [AdminController::class, 'answers'])->name('admin.answers');
