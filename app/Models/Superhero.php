<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    use HasFactory;

    // Las columnas que se pueden llenar
    protected $fillable = ['name', 'universe_id'];

    // Relación: Un superhéroe pertenece a un universo
    public function universe() {
        return $this->belongsTo(Universe::class);
    }
}