<?php

namespace App\Models\Master;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobCategory extends Model
{
    use HasFactory;

    protected $table = 'job_categories';
    protected $primaryKey = 'id';

    protected $fillable =
    [
        'id',
        'job_category',
        'status',
        'created_at',
        'created_by',
        'updated_by',
        'updated_at',
    ];

    public function store()
    {
        $request = request();

        $data = array(
            'job_category' => $request->job_category,
            'created_by' => Auth::user()->id,
        );

        return $this->create($data);
    }


}
