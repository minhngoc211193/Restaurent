<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable =['name','gender', 'birthday','phone', 'email', 'address', ];
    public function tablereses()
    {
        return $this->hasMany(Tableres::class);
    }
}
