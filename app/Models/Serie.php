<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    protected $table = 'Series';
    protected $fillable = ['nome'];

     public function copias()
    {
        return $this->hasMany(Copia::class);
    } 
}


