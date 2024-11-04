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
        Schema::create('villes', function (Blueprint $table) {
            $table->id('id_ville');
            $table->string('nom');
            $table->timestamps();
            $table->foreign('id_ville')->references('id')->on('users')->onDelete('cascade');
          //  $table->foreign('id_ville')->references('ville_id')->on('etudiantes')->onDelete('cascade');

         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('villes');
    }
};
