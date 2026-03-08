<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universe extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Relación: Un universo tiene muchos superhéroes
    public function superheroes() {
        return $this->hasMany(Superhero::class);
    }
}