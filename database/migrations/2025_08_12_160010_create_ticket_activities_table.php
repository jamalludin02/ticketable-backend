<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



return new class extends Migration {
    public function up(): void {
        Schema::create('ticket_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ticket_id')->constrained('tickets')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreignId('user_id')->constrained('users')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreignId('status_id')->constrained('statuses')->restrictOnDelete()->cascadeOnUpdate();
            $table->timestamp('date', 3);
            $table->timestamps(3);
        });
    }

    public function down(): void {
        Schema::dropIfExists('ticket_activities');
    }
};