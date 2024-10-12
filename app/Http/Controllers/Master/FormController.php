<?php

namespace App\Http\Controllers\Master;

use App\Models\Master\Forms;
use Illuminate\Http\Request;
use App\Models\Master\JobsList;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    private $job;
    private $form;

    public function __construct()
    {
        $this->job = new JobsList();
        $this->form = new Forms();
    }

    public function List()
    {
        try {

            $jobs_list = $this->job->get();
            return view('Master.Forms.index',compact('jobs_list'));


        } catch (\Exception $e) {
            dd($ex);
        }
    }
}
