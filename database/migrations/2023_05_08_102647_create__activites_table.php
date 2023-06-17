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
        Schema::create('activites', function (Blueprint $table) {
            $table->id('idA');
            $table->string('Type');
            $table->string('Titre');
            $table->string('Prix');
            $table->text('Information');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('ville_id');
            $table->foreign('ville_id')->references('idV')->on('villes')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Activites');
    }
};
