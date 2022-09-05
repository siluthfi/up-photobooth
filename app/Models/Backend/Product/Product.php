<?php

namespace App\Models\Backend\Product;

use App\Models\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, HasUuid;

    protected $table = 'products';
    protected $fillable = [
        'name',
        'photo',
        'description',
    ];
}
