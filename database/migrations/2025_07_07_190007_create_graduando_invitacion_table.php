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
        Schema::create('graduando_invitacion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('graduando_id')->constrained('graduandos')->onDelete('cascade');
            $table->foreignId('invitacion_id')->constrained('invitaciones')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('graduando_invitacion');
    }
};
