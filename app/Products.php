<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    public function descriptions()
    {
        return $this->hasMany('App\ProductDescription', 'product_id', 'product_id');
    }
    public function images()
    {
        return $this->hasMany('App\ProductImage', 'product_id', 'product_id');
    }

}
