<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        return view('users.home');
    }
    public function jobs(){
        return view('users.jobs');
    }
    public function employer(){
        return view('users.employer');
    }
    public function blogs(){
        return view('users.blogs');
    }
    public function aboutus(){
        return view('users.aboutus');
    }
    public function services(){
        return view('users.services');
    }
    public function contactus(){
        return view('users.contactus');
    }
    public function blogpreview(){
        return view('users.blogpreview');
    }
}
