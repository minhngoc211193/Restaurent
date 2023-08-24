<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tableres extends Model
{
    use HasFactory;
    protected $table='tablereses';
    protected $fillable = ['view', 'customer', 'phone'];
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function foods(){
        return $this->belongsToMany(Food::class);
    }
}
