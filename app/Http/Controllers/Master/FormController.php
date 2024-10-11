<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function forms(Request $request)
    {
        try {
            if ($request->ajax()) {
                $users = User::query();
                return datatables()->of($users)->addIndexColumn()->make(true);
            }
        } catch (\Exception $e) {
            dd($ex);
            return response()->json([
                'error' => 'An error occurred while fetching data: ' . $e->getMessage(),
            ], 500);
        }

        return view('admin.forms');
    }
}
