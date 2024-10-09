<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Datatables;

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
    public function forms(Request $request)
    {
        try {
            if ($request->ajax()) {
                $users = User::query();
                return datatables()->of($users)->addIndexColumn()->make(true);
            }
        } catch (\Exception $e) {
            // Log the exception for debugging
            \Log::error('Error in fetching user data for DataTables: ' . $e->getMessage());

            // Optionally, return a JSON response with the error
            return response()->json([
                'error' => 'An error occurred while fetching data: ' . $e->getMessage(),
            ], 500);
        }

        return view('admin.forms');
    }



    public function questions(){
        return view('admin.questions');
    }
    public function answers(){
        return view('admin.answers');
    }
}
