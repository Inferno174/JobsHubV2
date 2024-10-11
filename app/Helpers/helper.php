<?php

use App\Models\User;
use App\Models\Master\JobCategory;
    if(!function_exists('getUserName'))
    {
        function getUserName($id)
        {
            $data = User::where('id',$id)->where('status',ACTIVE)->select('name')->first();
            return $data->name;
        }
    }

    if(!function_exists('getStatus'))
    {
        function getStatus($status)
        {
            if($status == 1)
            {
                return 'ACTIVE';
            }

            else
            {
                return 'IN-ACTIVE';
            }
        }
    }

    if(!function_exists('getJobCategoryName'))
    {
        function getJobCategoryName($id)
        {
            $data = JobCategory::where('id',$id)->select('job_category')->first();
            return $data->job_category;
        }
    }
