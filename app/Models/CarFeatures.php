<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarFeatures extends Model
{
    use HasFactory;
    public $timeStamp = false;

    protected $primaryKey = 'car_id';

    protected $fillable = [
        'car_id',
        'abs',
        'abs',
        'air_conditioning',
        'power_windows',
        'power_door_locks',
        'gps_navigation_system',
        'bluetooth_connectivity',
        'backup_camera',
        'cruise_control',
        'remote_start',
        'heated_seats',
        'climate_control',
        'rear_parking_sensors',
        'leather_seats',
    ];
}
