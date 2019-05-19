<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeOptions extends Model
{
    protected $table = 'attribute_option';
    // protected $primaryKey = 'attribute_option_id';
    public function attributes()
    {
        return $this->hasOne('App\Attributes', 'attributes_id', 'attributes_id');
    }
    public function options()
    {
        return $this->hasOne(Options::class, "option_id", "option_id");
    }
    public function products()
    {
        return $this->hasOne(Products::class, "product_id", "product_id");
    }
    
}
