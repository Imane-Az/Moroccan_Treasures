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
        Schema::create('paiement', function (Blueprint $table) {
            $table->id('idfacture');
            $table->string('modePaiement');
            $table->date('datePaiement');
            $table->unsignedBigInteger('idCom');
            $table->foreign("idCom")->references("NumCom")->on("commandes")->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiement');
    }
};
