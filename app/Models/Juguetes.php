<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juguetes extends Model
{
    use HasFactory;
    protected $table = "juguetes";
    protected $fillable = ['izena','deskripzioa','stock','hasieraData'];
}
