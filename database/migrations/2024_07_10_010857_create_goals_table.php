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
        Schema::create('goals', function (Blueprint $table) {
            $table->id();
            $table->string('minuto');
            $table->string('desc');
            $table->string('codigo');

            $table->unsignedBigInteger('player_id')->nullable();  // Cambiar a unsignedBigInteger
            $table->unsignedBigInteger('party_id')->nullable();  // Cambiar a unsignedBigInteger

            $table->foreign('player_id')
                ->references('id')
                ->on('players')
                ->onDelete('set null');

            $table->foreign('party_id')
                ->references('id')
                ->on('parties')
                ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goals');
    }
};
