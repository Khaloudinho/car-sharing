<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    const RESERVATION_CONFIRMEE= 1;
    const RESERVATION_ANNULEE= 0;
    const RESERVATION_EFFECTIVE= 2;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reservation';

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
        'date_debut', 'date_retour', 'statut'
    ];

    /**
     * Get the typeVehicule record associated with the vehicule.
     */
    /*public function user()
    {
        return $this->hasOne('App\TypeVehicule');
    }*/
}
