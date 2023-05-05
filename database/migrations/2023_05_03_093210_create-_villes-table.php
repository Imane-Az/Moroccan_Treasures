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
        Schema::create('Villes', function (Blueprint $table) {
            $table->id('idV');
            $table->string('nomVille');
            $table->unsignedBigInteger('idE');
            $table->foreign("idE")->references("idE")->on("endroits");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Villes');
    }
};
