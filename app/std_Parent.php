<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class std_Parent extends Model
{
    //
    protected $primarykey='cnic';
    protected $fillable=['name','phone','cnic','password'];
}
