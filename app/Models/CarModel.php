<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;
    public function carModel()
{
    return $this->hasMany(CarModel::class, 'manufacture_id');
}

}
