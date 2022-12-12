<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sk2022 extends Model
{
    use HasFactory;

    protected $table = "sk2022s";

    protected $fillable = [
        'tanggal_surat', 'nomor', 'kepada', 'perihal', 'konseptor', 'keterangan'
    ];

    public function kodesatu(){
        return $this->belongsTo('App\Models\Kodesatu');
    }

    public function kodedua(){
        return $this->belongsTo('App\Models\Kodedua');
    }
}
