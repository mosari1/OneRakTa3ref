<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProduitAchat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit_achat', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('qte');
            $table->integer('id_achat');
            $table->integer('id_produit');
            $table->foreign('id_produit')->references('id')->on('produit');
            $table->foreign('id_achat')->references('id')->on('achat');
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
