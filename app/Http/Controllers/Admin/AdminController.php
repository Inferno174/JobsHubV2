<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function jobcategory(){
        return view('admin.jobcategory');
    }
    public function jobs(){
        return view('admin.jobs');
    }
    public function forms(){
        return view('admin.forms');
    }
    public function questions(){
        return view('admin.questions');
    }
    public function answers(){
        return view('admin.answers');
    }
}
