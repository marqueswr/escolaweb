<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Copia;

class Setor extends Model
{
    use HasFactory;
    protected $table = 'Setores';
    protected $fillable = ['nome'];

     public function copias()
    {
        return $this->hasMany(Copia::class);
    } 
}
