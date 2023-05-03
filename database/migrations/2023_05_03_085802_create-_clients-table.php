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
        Schema::create('clients', function (Blueprint $table) {
            $table->id('Cin');
            $table->string('NomClt');
            $table->string('PrenomClt');
            $table->string('AdresseClt');
            $table->string('telClt');
            $table->string('Password',60);
            $table->string('emailClt');
            $table->string('typeClt')->default('visiteur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
