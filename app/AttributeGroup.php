<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeGroup extends Model
{
    protected $table = 'attribute_group';
    protected $primaryKey = 'attribute_group_id';
    protected $fillable = ['attribute_group_name'];

    public static function findOrCreate($id)
    {
        $obj = AttributeGroup::find($id);
        return $obj ? : new AttributeGroup;
    }
}
