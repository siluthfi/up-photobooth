<?php

namespace App\Models\Backend\Transactions;

use App\Models\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory, HasUuid;

    protected $table = 'client';
    protected $fillable = [
        'name',
        'phone',
        'address'
    ];
}
