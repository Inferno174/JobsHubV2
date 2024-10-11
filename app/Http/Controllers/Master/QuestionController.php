<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function questions(){
        return view('admin.questions');
    }
}
