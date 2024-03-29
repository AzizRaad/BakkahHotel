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
        Schema::create('facility_room', function (Blueprint $table) {
            $table->foreignId('facility_id')
            ->constrained('facilities')
            ->cascadeOnDelete();
            $table->foreignId('room_id')
            ->constrained('rooms')
            ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facility_room');
    }
};
