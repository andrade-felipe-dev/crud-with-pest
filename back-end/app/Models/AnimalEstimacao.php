<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalEstimacao extends Model
{
    use HasFactory;

    protected $table = 'animal_estimacao';

    protected $fillable = ['nome', 'data_nascimento', 'idade', 'especie', 'raca', 'sexo', 'peso'];
}
