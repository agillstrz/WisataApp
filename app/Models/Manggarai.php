<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manggarai extends Model
{
    use HasFactory;
    protected $table = 'manggarais';
    protected $guarded=['id'];

    public function kategori(){
        return $this->belongsTo(kategori::class, 'kate_id','id');
    }

    public function riview()
    {
        return $this->hasMany(Riview::class);
    }
}
