<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;

    //relacion uno a muchos

    public function homes(){
        return $this->hasMany('App\Models\Home');
    }
}
