<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eduardo extends Model
{
    use HasFactory;

    protected $table = 'eduardo';  
    protected $fillable = ['idade', 'nome'];
}
