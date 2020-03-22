<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Teacher;
class scClass extends Model
{
    //
    public function teacher()
    {
        return $this->hasOne('App\Teacher');
    }
}
