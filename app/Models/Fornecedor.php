<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table ='fornecedores';
    use HasFactory;
    
    protected $fillable = [
        'nome',
        'site',
        'uf',
        'email'
    ];
    function produtos (){
        return $this->hasMany('App\Models\Produto');//,'fornecedor_id','id'
    }
}
