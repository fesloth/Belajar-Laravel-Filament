<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapelPilihan extends Model
{
    use HasFactory;

    protected $fillable = ["mapel_pilihan"];
    protected $table = 'mapel_pilihan';
}
