<?php

namespace App\Models\Master;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobsList extends Model
{
    use HasFactory;

    protected $table = 'jobs_list';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'job_category_id',
        'job_name',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];

    public function store()
    {
        $request = request();
        $data = array(
            'job_category_id' => $request->job_category,
            'job_name' => $request->job_name,
            'created_by' => Auth::user()->id,
        );

        $this->create($data);
    }
}
