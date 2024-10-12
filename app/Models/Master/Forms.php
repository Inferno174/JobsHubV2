<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    use HasFactory;

    protected $table = 'forms';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'job_id',
        'form_name',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];

    public function store()
    {
        $request = request();
    }
}
