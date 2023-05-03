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
        Schema::create('Commandes', function (Blueprint $table) {
            $table->id('NumCom');
            $table->date('DateComm');
            $table->unsignedBigInteger('idC');
            $table->unsignedBigInteger('idFac');
            $table->foreign("idC")->references("Cin")->on("clients");
            $table->foreign("idFac")->references("idfacture")->on("paiement");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Commandes');
    }
};
