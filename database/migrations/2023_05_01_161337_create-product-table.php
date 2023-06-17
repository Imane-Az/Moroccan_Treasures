<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('Product', function (Blueprint $table) {
            $table->id('codePro');
            $table->string('libellePro');
            $table->string('image');
            $table->integer('qtestock');
            $table->float('pu');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('Num_Com');
            $table->unsignedBigInteger('fournisseur_id');
            $table->unsignedBigInteger('ville_id')->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('idCat')->on('categories');
            $table->foreign('Num_Com')->references('NumCom')->on('Commandes');
            $table->foreign('fournisseur_id')->references('idFor')->on('fournisseurs');
            $table->foreign('ville_id')->references('idV')->on('villes');
        });
    }

   


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Product');
    }
};
