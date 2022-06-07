<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billets extends Model
{
    use HasFactory;


    public $timestamps= false;

    public function commentaires(){
        return $this->belongsTo(Commentaires::class);
    }
}
