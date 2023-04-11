<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'worker_id', 'vehicle_id',
    ];

    /**
     * Get the vehicle.
     */
    public function vehicle()
    {
        return $this->belongsTo('App\Vehicle');
    }

    /**
     * Get the worker.
     */
    public function worker()
    {
        return $this->belongsTo('App\Worker');
    }
}
