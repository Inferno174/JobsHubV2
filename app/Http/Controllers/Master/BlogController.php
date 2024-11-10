<?php

namespace App\Http\Controllers\Master;

use Exception;
use Illuminate\Http\Request;
use App\Models\Master\BlogPost;
use App\Models\Master\JobCategory;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    private $job_category;
    private $blogs;

    public function __construct()
    {
        $this->job_category = new JobCategory();
        $this->blogs = new BlogPost();
    }

    public function List()
    {
        try{
            $job_cat = $this->job_category->get();
            $blog = $this->blogs->get();

            return view('Master.Blog.index',compact('job_cat','blog'));
        }
        catch(Exception $ex)
        {
            dd($ex);
        }
    }

    public function Add(Request $request)
    {
        try
        {
            dd($request->all());
            $rules = [
                'blog_title' => 'required',
                'blog_date' => 'required',
                'blog_tamil' => 'required',
                'blog_hindi' => 'required',
                'blog_english' => 'required',
                'job_type' => 'required',
                'job_category' => 'required',
                'blog_image' => 'required',
            ];

            $messages = [
                'blog_date.required' => 'Please Choose The Blog Date',
                'blog_title.required' => 'Blog Title Cannot Be Empty',
                'blog_tamil.required' => 'Blog Description In Tamil Is Required',
                'blog_hindi.required' => 'Blog Description In Hindi Is Required',
                'blog_english.required' => 'Blog Description In English Is Required',
                'job_type.required' => 'Please Select Job Type',
                'job_category.required' => 'Please Select Job Category',
                'blog_image.required' => 'Please Select Blog Image',
            ];

            $validator = Validator::make($request->all(),$rules,$messages);
            if($validator->fails())
            {
                return redirect()->back()
                ->withErrors($validator)
                ->withInput();
            }

            $this->blogs->store();
        }
        catch(Exception $ex)
        {
            dd($ex);
        }
    }
}
