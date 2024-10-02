<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTracking extends Model
{
    use HasFactory;

    protected $table = 'user_trackings';
    protected $primaryKey = 'id';

    protected $fillable = [
        'login_user_id',
        'session_id',
        'requested_url',
        'user_ip',
        'user_device',
        'status',
        'date_time',
        'created_at',
        'updated_at',
    ];
}
