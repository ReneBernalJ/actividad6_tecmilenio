<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universe extends Model
{
    use HasFactory;

    // Aquí le decimos a Laravel que puede llenar la columna 'name'
    protected $fillable = ['name'];
}