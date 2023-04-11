<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'address',
    ];


    /**
     * Get the vehicles for the Worker .
     */
    public function vehicles()
    {

        return $this->hasMany('App\Vehicle', 'worker_id');
    }

    
}
