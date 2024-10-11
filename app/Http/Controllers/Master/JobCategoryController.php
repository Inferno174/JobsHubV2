<?php

namespace App\Http\Controllers\Master;
use Illuminate\Http\Request;
use App\Models\Master\JobCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class JobCategoryController extends Controller
{

    private $job_category;

    public function __construct()
    {
        $this->job_category = new JobCategory();
    }

    public function List()
    {
        try {

            $job_category = $this->job_category->get();
            return view('Master.JobCategory.index',compact('job_category'));
        } catch (Exception $ex) {
            dd($ex);
        }

    }

    public function Add(Request $request)
    {
        // dd($request->all());
        try{

            $rules = [
                'job_category' => 'required',
            ];

            $messages = [
                'job_category.required' => 'Please Enter Job Category Name',
            ];

            $validator = Validator::make($request->all(),$rules,$messages);
            if($validator->fails())
            {
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }

            $this->job_category->store();
            return redirect()->back()->with('success', 'Job category added successfully!');

        }
        catch(Exception $ex)
        {
            return redirect()->back()->with('error','Something Went Wrong');
        }
    }
}
