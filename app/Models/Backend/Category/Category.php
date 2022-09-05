<?php

namespace App\Models\Backend\Category;

use App\Models\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, HasUuid;

    protected $table = 'categories';
    protected $fillable = [
        'name',
        'price',
        'description',
        'photo_id',
        'product_id',
    ];
}
