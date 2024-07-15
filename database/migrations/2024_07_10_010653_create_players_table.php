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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_nac');
            $table->string('codigo');
            $table->string('nombre');
            $table->string('posicion');

            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id')
            ->references('id')
            ->on('teams')
            ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
