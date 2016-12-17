<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesChild extends Model
{
    protected $table = 'categories_children';

    protected $fillable = [
        'name'
    ];
}
