<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function nasabah(){
        return $this->belongsTo(Nasabah::class);
    }

    public function setorcicilan(){
        return $this->belongsToMany(SetorCicilan::class);
    }
}
