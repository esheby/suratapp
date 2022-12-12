<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kodesatu extends Model
{
    use HasFactory;

    protected $table = "kodesatu";

    public function kodedua(){
        return $this->hasMany('App\Models\Kodedua');
    }

    public function suratkeluar(){
        return $this->hasMany('App\Models\Sk2022');
    }
}
