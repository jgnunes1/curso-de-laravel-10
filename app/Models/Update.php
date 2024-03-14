<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    protected $fillable = ['title', 'description', 'created_at'];

    // Você pode adicionar qualquer outra lógica aqui, como relacionamentos com outros modelos, acessores, mutadores, etc.
}
