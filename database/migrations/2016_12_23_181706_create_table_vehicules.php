<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVehicules extends Migration
{

    protected $tableName="vehicule";
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->string('marque');
            $table->string('modele');
            $table->string('immatriculation');
            $table->smallInteger('carburant_max');
            $table->date('prochain_entretien');
            //car on utilise des constantes pour l etat c est beaucoup plus facile de travailler ensuite
            $table->tinyInteger('etat');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop($this->tableName);
    }
}
