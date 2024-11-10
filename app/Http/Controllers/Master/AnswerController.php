<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;

class AnswerController extends Controller
{
    public function List()
    {
        return view('admin.answers');
    }
}
