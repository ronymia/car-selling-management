<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelType extends Model
{
    // protected $table = 'car_fuel_types';
    // protected $primaryKey = 'car_id';
    // public $incrementing = false;
    // protected $keyType = 'string';
    // public $created_at = 'create_date'
    // public $updated_at = 'update_date'
    // const UPDATE_AT = null;
    use HasFactory;
    public $timeStamp = false;
}
