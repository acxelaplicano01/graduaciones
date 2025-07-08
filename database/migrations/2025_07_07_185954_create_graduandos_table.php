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
        Schema::create('graduandos', function (Blueprint $table) {
            $table->id();
            $table->string('carrera');
            $table->string('cuenta')->unique();
            $table->string('nombre');
            $table->string('telefono');
            $table->integer('cantidad_invitados')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('graduandos');
    }
};
