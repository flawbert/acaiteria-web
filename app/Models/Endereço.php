<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereço extends Model
{
    use HasFactory;

    protected $fillable = [

        "nomerua", "numero", "bairro",
        "pontoreferencia"

    ];
}
