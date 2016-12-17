<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category_relations extends Model
{
    protected $table = 'category_relations';

    protected $fillable = [
        'parent_id',
        'child_id'
    ];

}
