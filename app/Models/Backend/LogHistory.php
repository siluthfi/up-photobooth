<?php

namespace App\Models\Backend;

use App\Models\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogHistory extends Model
{
    use HasFactory, HasUuid;

    protected $table = 'log_histories';

    protected $fillable = [
        'user_id',
        'subject',
        'user_ip',
        'user_device',
        'recent_log',
    ];
}
