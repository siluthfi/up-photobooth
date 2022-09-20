<?php

namespace App\Models\Backend\Transaction;

use App\Models\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory, HasUuid;

    protected $table = 'list_orders';
    protected $fillable = [
        'code_order',
        'client_id',
        'product_id',
        'color_theme',
        'theme_name',
        'is_backdrop',
        'backdrop',
        'date',
    ];
}
