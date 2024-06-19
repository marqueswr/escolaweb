<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Copia extends Model
{
    use HasFactory;
    protected $table = 'Copias';
    protected $fillable = [
        'mes',
        'descricao',
        'quantidade',
        'dtasolicitacao',
        'tipo' ,
        'setores_id',
        'disciplina_id',
        'solicitante_id',
        'serie_id',
        'user_id'
    ];

     public function setor(){
        return $this->belongsTo(Setor::class,'setores_id');
    } 
    
    public function disciplina(){
        return $this->belongsTo(Disciplina::class,'disciplina_id');
    } 
    public function serie(){
        return $this->belongsTo(Serie::class,'serie_id');
    } 
    public function solicitante(){
        return $this->belongsTo(Solicitante::class,'solicitante_id');
    } 
    public function retirado(){
        return $this->belongsTo(User::class,'user_id');
    }  
}
