<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    const INUTILISABLE_ETAT = 0;
    const MAUVAIS_ETAT = 1;
    const BON_ETAT = 2;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vehicule';

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
        'marque', 'modele', 'immatriculation', 'carburant_max', 'prochain_entretien', 'etat'
    ];

    /**
     * Get the typeVehicule record associated with the vehicule.
     */
    public function user()
    {
        return $this->hasOne('App\TypeVehicule');
    }
}
