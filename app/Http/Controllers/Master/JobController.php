<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Models\Master\JobsList;
use App\Models\Master\JobCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class JobController extends Controller
{
    private $job_category;
    private $job;

    public function __construct()
    {
        $this->job_category = new JobCategory();
        $this->job = new JobsList();
    }
    public function List()
    {
        $Category = $this->job_category->get();
        $jobs = $this->job->get();
        return view('Master.Job.index', compact('Category','jobs'));
    }


    public function Add(Request $request)
    {
        try{

            $rules = [
                'job_category' => 'required',
                'job_name' => 'required',
            ];

            $messages = [
                'job_category.required' => 'Please Enter Job Category Name',
                'job_name' => 'Please Enter The Job Name',
            ];

            $validator = Validator::make($request->all(),$rules,$messages);
            if($validator->fails())
            {
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }

            $this->job->store();
            return redirect()->back()->with('success', 'Job added successfully!');

        }
        catch(Exception $ex)
        {
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }
}
