<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    //relacion uno a muchos(inversa)

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }
    public function location(){
        return $this->belongsTo('App\Models\Location');
    }
    public function zone(){
        return $this->belongsTo('App\Models\Zone');
    }
}
