<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    protected $fillable = [
        'name',
    ];


    public function cars(): HasMany
    {
        return $this->hasMany(Car::class, 'fuel_type_id');
    }
}
