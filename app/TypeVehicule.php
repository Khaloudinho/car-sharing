<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeVehicule extends Model
{
    const BAS_GAMME = 0;
    const MOYEN_GAMME = 1;
    const HAUT_GAMME = 2;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'type_vehicule';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'gamme', 'base_tarifaire'
    ];

    /**
     * Get the Vehicule record associated with the TypeVehicule.
     */
    public function user()
    {
        return $this->hasOne('App\Vehicule');
    }
}
