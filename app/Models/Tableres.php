<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tableres extends Model
{
    use HasFactory;
    protected $table='tablereses';
    protected $fillable = ['view'];
}
