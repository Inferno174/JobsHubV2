<?php

use App\Models\Master\JobCategory;
use App\Models\User;
if (!function_exists('getUserName')) {
    function getUserName($id)
    {
        $data = User::where('id', $id)->where('status', ACTIVE)->select('name')->first();
        return $data->name;
    }
}

if (!function_exists('getStatus')) {
    function getStatus($status)
    {
        if ($status == 1) {
            return 'ACTIVE';
        } else {
            return 'IN-ACTIVE';
        }
    }
}

if (!function_exists('getJobCategoryName')) {
    function getJobCategoryName($id)
    {
        $data = JobCategory::where('id', $id)->select('job_category')->first();
        return $data->job_category;
    }
}

if (!function_exists('get_encryptVal')) {

    function get_encryptVal($id)
    {

        return strtr(base64_encode($id), '+/=', '-_,');
    }
}

if (!function_exists('get_decryptVal')) {

    function get_decryptVal($id)
    {
        return base64_decode(strtr($id, '-_,', '+/='));
    }
}

if (!function_exists('DBdateformat')) {

    function DBdateformat($date)
    {

        return date('Y-m-d', strtotime($date));
    }
}

if (!function_exists('DBdatetimeformat')) {

    function DBdatetimeformat($date)
    {

        return date('Y-m-d H:i:s', strtotime($date));
    }
}

if (!function_exists('Displaydateformat')) {

    function Displaydateformat($date)
    {

        return date('d-m-Y', strtotime($date));
    }
}

if (!function_exists('Displaytimeformat')) {

    function Displaytimeformat($date)
    {

        return date('H:i A', strtotime($date));
    }
}

if (!function_exists('datastringreplace')) {

    function datastringreplace($date)
    {

        return str_replace("/", "-", $date);
    }
}

if (!function_exists('Displaydatetimeformat')) {

    function Displaydatetimeformat($date)
    {

        return date('d-m-Y H:i:s', strtotime($date));
    }
}

if (!function_exists('todaydate')) {

    function todaydate()
    {

        return date('d-m-Y');
    }
}

if (!function_exists('currenttime')) {

    function currenttime()
    {

        return date('H:i A');
    }
}

if (!function_exists('todayDbdate')) {

    function todayDbdate()
    {

        return date('Y-m-d');
    }
}

if (!function_exists('todaydatetime')) {

    function todaydatetime()
    {

        return date('d-m-Y H:i:s');
    }
}

if (!function_exists('todayDBdatetime')) {

    function todayDBdatetime()
    {

        return date('Y-m-d H:i:s');
    }
}

if (!function_exists('monthyear')) {

    function monthyear()
    {

        return date('F,Y');
    }
}

if (!function_exists('currentyear')) {

    function currentyear()
    {

        return date('Y');
    }
}
if (!function_exists('encryptId')) {

    function encryptId($value)
    {

        $action = 'encrypt';
        $string = $value;
        $output = false;
        $encrypt_method = "AES-256-CBC";

        $secret_key = 'P(0p!e@e$k';
        $secret_iv = 'Peop!eDe$k';

        // hash
        $key = hash('sha256', $secret_key);

        $iv = substr(hash('sha256', $secret_iv), 0, 16);

        if ($action == 'encrypt') {
            $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
            $output = base64_encode($output);
        } else if ($action == 'decrypt') {

            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }

        return $output;
    }
}

if (!function_exists('decryptId')) {

    function decryptId($encrypted)
    {

        $action = 'decrypt';
        $string = $encrypted;
        $output = false;
        $encrypt_method = "AES-256-CBC";

        $secret_key = 'P(0p!e@e$k';
        $secret_iv = 'Peop!eDe$k';

        // hash
        $key = hash('sha256', $secret_key);

        $iv = substr(hash('sha256', $secret_iv), 0, 16);

        if ($action == 'encrypt') {
            $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
            $output = base64_encode($output);
        } else if ($action == 'decrypt') {

            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }

        return $output;
    }
}

if (!function_exists('admin_url')) {

    function admin_url($value = "")
    {
        return config('constants.ADMIN_URL') . $value;
    }
}

if (!function_exists('public_path')) {

    function public_path($value = "")
    {
        return config('constants.ADMIN_URL') . "public/" . $value;
    }
}

if (!function_exists('public_css')) {

    function public_css($value = "")
    {
        return config('constants.ADMIN_URL') . "public/assets/css/" . $value;
    }
}

if (!function_exists('public_js')) {

    function public_js($value = "")
    {
        return config('constants.ADMIN_URL') . "public/assets/js/" . $value;
    }
}

if (!function_exists('public_plugins')) {

    function public_plugins($value = "")
    {
        return config('constants.ADMIN_URL') . "public/assets/plugins/" . $value;
    }
}

if (!function_exists('public_image')) {

    function public_image($value = "")
    {
        return config('constants.ADMIN_URL') . "public/assets/images/" . $value;
    }
}
