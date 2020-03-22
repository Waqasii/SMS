<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stdParent extends Model
{
    //
    protected $primarykey='cnic';
    protected $fillable = [
        'name',
        'phone',
        'cnic',
        'password'
    ];
}
