<?php

namespace App\Models\Backend\Auth;

use App\Models\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRoles extends Model
{
    use HasFactory, HasUuid;

    protected $table = 'user_roles';
    protected $fillable = [
        'user_id',
        'roles',
        'can',
    ];
}
