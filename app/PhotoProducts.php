<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoProducts extends Model
{
    protected $table = 'photo_products';
    protected $primaryKey = 'id';

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
