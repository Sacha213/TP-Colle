<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\BinaryOp;

class Commentaires extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function commentaires(){
        return $this->hasMany(Billets::class);
    }
}
