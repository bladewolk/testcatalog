<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $fillable = [
        'name',
        'subcategory_id',
        'price',
        'image'
    ];

    public function subcategory()
    {
        $this->belongsTo(Subcategory::class);
    }
}
