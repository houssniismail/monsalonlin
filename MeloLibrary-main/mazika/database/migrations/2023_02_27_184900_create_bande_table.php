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
        Schema::create('bande', function (Blueprint $table) {
            $table->id();
            $table->string('nom'); 
            $table->string('image'); 
            $table->string('membres'); 
            $table->string('pays'); 
            $table->date('date_de_création'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bande');
    }
};
