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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_no');
            $table->unsignedBiginteger('room_type_id');
            $table->foreign('room_type_id')
                ->references('id')
                ->on('room_types')
                ->cascadeOnDelete();
            $table->string('room_capacity');
            $table->string('price');
            $table->string('size');
            $table->string('view');
            $table->string('bed_style');
            $table->string('description');
            $table->enum('status', ['available', 'occupied'])->default('available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
