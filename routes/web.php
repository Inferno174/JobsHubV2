<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Master\AnswerController;
use App\Http\Controllers\Master\FormController;
use App\Http\Controllers\Master\JobCategoryController;
use App\Http\Controllers\Master\JobController;
use App\Http\Controllers\Master\QuestionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::GET('/', function () {
    return view('users.home');
});

Auth::routes();

Route::middleware(['user_log'])->group(function () {

    Route::GET('/', [UserController::class, 'home'])->name('users.home');
    Route::GET('jobs', [UserController::class, 'jobs'])->name('users.jobs');
    Route::GET('employer', [UserController::class, 'employer'])->name('users.employer');
    Route::GET('job_blogs', [UserController::class, 'blogs'])->name('users.blogs');
    Route::GET('aboutus', [UserController::class, 'aboutus'])->name('users.aboutus');
    Route::GET('services', [UserController::class, 'services'])->name('users.services');
    Route::GET('contact', [UserController::class, 'contactus'])->name('users.contactus');
    Route::GET('/jobspreview', [UserController::class, 'blogpreview'])->name('users.blogpreview');

    // Admin Routes
    Route::middleware(['web', 'user-access:2'])->group(function () {

        // Admin Master Routes
        Route::GET('/admin_dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        // Job Category Routes
        Route::POST('/add/job_category/submit', [JobCategoryController::class, 'Add']);
        Route::GET('/admin_jobcategory', [JobCategoryController::class, 'List'])->name('admin.jobcategory');

        // Job Routes
        Route::GET('/admin_jobs', [JobController::class, 'List'])->name('admin.jobs');
        Route::POST('/admin/jobs/add/submit', [JobController::class, 'Add']);

        // Form Routes
        Route::GET('/admin_forms', [FormController::class, 'List'])->name('admin.forms');

        // Answer Routes
        Route::GET('/admin_answers', [AnswerController::class, 'List'])->name('admin.answers');

        // Question ROutes
        Route::GET('/admin_questions', [QuestionController::class, 'List'])->name('admin.questions');
    });
});
