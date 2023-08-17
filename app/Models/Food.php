<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table='foods';
    protected $fillable=['type_id','name','image', 'description', 'price'];
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function tablereses(){
        return $this->belongsToMany(Tableres::class);
    }
}
