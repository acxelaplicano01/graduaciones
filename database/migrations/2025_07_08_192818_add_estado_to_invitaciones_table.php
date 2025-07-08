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
        Schema::table('invitaciones', function (Blueprint $table) {
            $table->enum('estado', ['pendiente', 'tomada'])->default('pendiente')->after('codigo');
            $table->timestamp('fecha_tomada')->nullable()->after('estado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('invitaciones', function (Blueprint $table) {
            $table->dropColumn(['estado', 'fecha_tomada']);
        });
    }
};
