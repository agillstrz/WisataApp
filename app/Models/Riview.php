<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riview extends Model
{
    use HasFactory;
    protected $table = 'riviews';
    protected $guarded=['id'];

    public function manggarai(){
        return $this->belongsTo(Manggarai::class, 'manggarai_id','id');
    }
}
