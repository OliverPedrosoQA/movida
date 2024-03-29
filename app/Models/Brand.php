<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = ['name'];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}

 