<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesProducts extends Model
{
    use HasFactory;

    protected $table = 'category_product';

    protected $fillable = [
        'categories_id',
        'products_id'
    ];
}
