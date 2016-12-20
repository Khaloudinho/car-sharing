<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{

    const ROLE_CLIENT=0;
    const ROLE_RESPONSABLE=1;
    const ROLE_TECHNICIEN=0;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'personne';

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
        'prenom', 'date_naissance', 'permis', 'tel', 'role'
    ];

    /**
     * Get the user record associated with the personne.
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }

}
