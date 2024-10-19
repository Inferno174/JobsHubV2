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


Auth::routes();

Route::middleware(['user_log'])->group(function () {

    Route::GET('/', [UserController::class, 'home'])->name('users.home');
    Route::GET('jobs', [UserController::class, 'jobs'])->name('users.jobs');
    Route::GET('employer', [UserController::class, 'employer'])->name('users.employer');
    Route::GET('jobblogs', [UserController::class, 'blogs'])->name('users.blogs');
    Route::GET('aboutus', [UserController::class, 'aboutus'])->name('users.aboutus');
    Route::GET('services', [UserController::class, 'services'])->name('users.services');
    Route::GET('contact', [UserController::class, 'contactus'])->name('users.contactus');
    Route::GET('/jobs/preview', [UserController::class, 'blogpreview'])->name('users.blogpreview');

    // Admin Routes
    Route::middleware(['auth', 'user-access:2'])->group(function () {

        // Admin Master Routes
        Route::GET('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        // Job Category Routes
        Route::POST('/admin/add/jobcategory/submit', [JobCategoryController::class, 'Add']);
        Route::GET('/admin/jobcategory', [JobCategoryController::class, 'List'])->name('admin.jobcategory');

        // Job Routes
        Route::GET('/admin/jobs', [JobController::class, 'List'])->name('admin.jobs');
        Route::POST('/admin/jobs/add/submit', [JobController::class, 'Add']);

        // Form Routes
        Route::GET('/admin/forms', [FormController::class, 'List'])->name('admin.forms');

        // Answer Routes
        Route::GET('/admin/answers', [AnswerController::class, 'List'])->name('admin.answers');

        // Question ROutes
        Route::GET('/admin/questions', [QuestionController::class, 'List'])->name('admin.questions');
    });
});
