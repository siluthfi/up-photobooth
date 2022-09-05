<?php

namespace App\Models\Backend\Product;

use App\Models\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory, HasUuid;

    protected $table = 'buildings';
    protected $fillable = [
        'name',
        'address',
        'photo',
        'description',
    ];
}
