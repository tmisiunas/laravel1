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
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            // Relations
            $table->foreignId('sport_id')->constrained()->cascadeOnDelete();
            $table->foreignId('contest_id')->constrained()->cascadeOnDelete();

            // Participants (both from participants table)
            $table->foreignId('participant1_id')->constrained('participants')->cascadeOnDelete();
            $table->foreignId('participant2_id')->constrained('participants')->cascadeOnDelete();

            // Event data
            $table->dateTime('event_start_time');
            $table->integer('value')->nullable();
            $table->integer('result')->nullable();
            $table->string('resultText')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
