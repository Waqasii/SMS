<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\scClass;
class Teacher extends Model
{

    public function scClass()
    {
        return $this->belongsTo('App\scClass');
    }
}
