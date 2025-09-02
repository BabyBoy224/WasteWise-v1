<?php

// database/migrations/xxxx_xx_xx_create_schedules_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('dayOfWeek');
            $table->boolean('lastVisited')->nullable();
            $table->timestamps();
        });

        Schema::create('barangay_schedule', function (Blueprint $table) {
            $table->id();
            $table->foreignId('schedule_id')->constrained()->onDelete('cascade');
            $table->foreignId('barangay_id')->constrained()->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('barangay_schedule');
        Schema::dropIfExists('schedules');
    }
};

