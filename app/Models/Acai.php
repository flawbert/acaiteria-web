<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acai extends Model
{
    use HasFactory;

    protected $fillable = [

     "preco" //10,00 - 250ml; 12,00 - 350ml, 14,00 -500ml; 

    ];

    public static function getTodosOrdemPreco(){
        return Acai::orderBy('preco')->get();
    }
}
