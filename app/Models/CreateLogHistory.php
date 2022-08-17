<?php

namespace App\Models;

use App\Models\Backend\LogHistory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * To Create Log Historyu
 */
trait CreateLogHistory
{
    public function insertLog($subject)
    {
        $log = LogHistory::create([
            'user_id' => auth()->user()->id,
            'subject' => $subject,
            'user_ip' => request()->ip(),
            'user_device' => request()->userAgent(),
            'recent_log' => date('Y-m-d H:i:s'),
        ])->fresh();

        return $log;
    }    
}

