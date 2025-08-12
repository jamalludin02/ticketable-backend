<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
    public function up(): void {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->restrictOnDelete()->cascadeOnUpdate();
            $table->text('type');
            $table->text('message');
            // hanya created_at sesuai DDL (tanpa updated_at)
            $table->timestamp('created_at', 3)->useCurrent();
        });
    }

    public function down(): void {
        Schema::dropIfExists('notifications');
    }
};
