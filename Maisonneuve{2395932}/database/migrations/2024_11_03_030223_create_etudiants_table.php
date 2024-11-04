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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id('etudiant_id');
            $table->string('nom');
            $table->string('addresse');
            $table->string('telephone');
            $table->string('email');
            $table->date('date_naissance')->nullable();
            $table->unsignedBigInteger('ville_id');
            $table->timestamps();
            $table->foreign('etudiant_id')->references('id')->on('users')->onDelete('cascade');
           // $table->foreign('ville_id')->references('id_ville')->on('villes')->onDelete('cascade');
            // $table->foreignId('ville_id')->constrained()->onDelete('cascade');
        
            
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void

    {
        Schema::dropIfExists('etudiants');
    }

    // public function up() {
    //     Schema::create('tasks', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('title');
    //         $table->text('description')->nullable();
    //         $table->boolean('completed')->default(0);
    //         $table->date('due_date')->nullable();
    //         $table->unsignedBigInteger('user_id');
    //         $table->timestamps();
    //     $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    //     });
    // }
};
