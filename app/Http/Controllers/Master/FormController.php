<?php

namespace App\Http\Controllers\Master;

use App\Models\Master\Forms;
use Illuminate\Http\Request;
use App\Models\Master\JobCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    private $job_category;
    private $form;

    public function __construct()
    {
        $this->job_category = new JobCategory();
        $this->form = new Forms();
    }

    public function list()
    {
        try {

            $job_cat = $this->job_category->get();
            return view('Master.Forms.index', compact('job_cat'));

        } catch (\Exception $e) {
            dd($ex);
        }
    }

    public function Add(Request $request)
    {
        try {
            $rules = [
                'job_category' => 'required',
                'form_name' => 'required,'
            ];

            $messages = [
                'job_category.required' => 'Please Enter Job Category Name',
                'form_name.required' => 'Form Name Cannot Be Empty',
            ];

            $validator = Validator::make($request->all(),$rules,$messages);
            if($validator->fails())
            {
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }
            $this->form->store();
            return redirect()->back()->with('success', 'Form added successfully!');
        } catch (Exception $ex) {
            dd($ex);
            return redirect()->back()->with('error', 'Something Went Wrong');
        }
    }
}
