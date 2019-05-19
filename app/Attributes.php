<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AttributeGroup;

class Attributes extends Model
{
    protected $table = 'attributes';
    protected $primaryKey = 'attributes_id';
    protected $fillable = ['attributes_id'];
    public static function findOrCreate($id)
    {
        $obj = Attributes::find($id);
        return $obj ? : new Attributes;
    }
    public function GroupAttribute()
    {
        return $this->hasOne('App\AttributeGroup', 'attribute_group_id', 'attribute_group_id');
    }
    public function Options()
    {
        return $this->hasMany('App\Options', 'attribute_id', 'attribute_id');
    }
    public function getoptions()
    {
        return $this->hasOne('App\Options', 'options_id', 'options_id');
    }

}
