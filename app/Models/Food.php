<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table='foods';
    protected $fillable=['type_id','name', 'description', 'price'];
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
