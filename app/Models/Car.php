<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use SoftDeletes;
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
//    protected $hidden = [];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
//    protected $attributes = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
//    protected $casts = [];

    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
//    protected $touches = [];

    /**
     * The event map for the model.
     *
     * @var array
     */
//    protected $dispatchesEvents = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */


    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    /**
     * Get the car this instance belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    function car_instances()
    {
        return $this->hasMany(CarInstance::class);
    }

    /**
     * Get the images of the car
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    function car_images()
    {
        return $this->hasMany(CarImage::class);
    }

    /**
     * Get this car's mfg
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function mfg()
    {
        return $this->belongsTo(Mfg::class);
    }

    /**
     * Get this car's oem
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function oem()
    {
        return $this->belongsTo(Oem::class);
    }

    /**
     * Get this car's type
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function type()
    {
        return $this->belongsTo(CarType::class);
    }

    /**
     * Get this car's engine
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function engine()
    {
        return $this->belongsTo(Engine::class);
    }

    /**
     * Get this car's transmission
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function transmission()
    {
        return $this->belongsTo(Transmission::class);
    }

    /**
     * Get this car's drivetrain
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function drivetrain()
    {
        return $this->belongsTo(Drivetrain::class);
    }

    /**
     * Get this car's fuel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function fuel()
    {
        return $this->belongsTo(Fuel::class);
    }

    /**
     * Get this car's lot
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function lot()
    {
        return $this->belongsTo(Lot::class);
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /**
     * Get the route to view this firm.
     * @return string
     */
    public function getViewRouteAttribute() : string
    {
        return route('cars.show', $this);
    }


    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

}
