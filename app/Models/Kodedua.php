<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kodedua extends Model
{
    use HasFactory;

    protected $table = "kodedua";

    public function kodesatu(){
        return $this->belongsTo('App\Models\Kodesatu');
    }

    public function suratkeluar(){
        return $this->hasMany('App\Models\Sk2022');
    }
}
