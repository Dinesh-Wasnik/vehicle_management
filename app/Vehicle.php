<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Vehicle extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'acquired_date', 'parking_location', 'worker_id', 'license_number'
    ];


    /**
     * Get the worker associated with the vehicle.
     */
    public function worker()
    {
        return $this->hasOne('App\Worker', 'id', 'worker_id');
    }

}



