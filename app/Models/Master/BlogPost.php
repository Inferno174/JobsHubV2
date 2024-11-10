<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $table = 'blog_posts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'job_category_id',
        'blog_title_english',
        'blog_title_hindi',
        'blog_title_tamil',
        'salary',
        'company_id',
        'blog_link',
        'blog_description_tamil',
        'blog_description_english',
        'blog_description_hindi',
    ];

    public function store()
    {
        $request = request();

        $data = array(
            'blog_title_english' => $request->blog_title_english,
            'blog_title_tamil' => $request->blog_title_tamil,
            'blog_title_hindi' => $request->blog_title_hindi,
            'salary' => $request->salary,
            'blog_link' => $request->blog_link,
            'blog_description_tamil' => $request->blog_tamil,
            'blog_description_hindi' => $request->blog_hindi,
            'blog_description_english' => $request->blog_english,
            'job_type' => decryptId($request->job_type),
            'job_category' => decryptId($request->job_category),
        );

        return $this->create($data);
    }
}
