<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    protected $table = 'options';
    protected $primaryKey = 'option_id';

    public function OptionDetails()
    {
        return $this->hasMany('App\OptionsDescription', 'option_id', 'option_id');
    }
    public function AttributeDetails()
    {
        return $this->hasOne('App\Attributes', 'attributes_id', 'attributes_id');
    }
}

