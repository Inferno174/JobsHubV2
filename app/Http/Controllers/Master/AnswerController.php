<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;

class AnswerController extends Controller
{
    public function answers()
    {
        return view('admin.answers');
    }
}
