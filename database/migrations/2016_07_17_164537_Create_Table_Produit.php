<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProduit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Produit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('code_barre');
            $table->string('libelle');
            $table->string('prix_achat');
            $table->string('prix_vente');
            $table->string('quantite');
            
            
            $table->rememberToken();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
