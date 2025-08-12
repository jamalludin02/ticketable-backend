<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
    public function up(): void {
        Schema::create('chat_messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ticket_id')->constrained('tickets')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreignId('user_id')->constrained('users')->restrictOnDelete()->cascadeOnUpdate();
            $table->text('message');
            // kolom bernama 'timestamp' sesuai DDL
            $table->timestamp('timestamp', 3);
            // hanya created_at sesuai DDL (tanpa updated_at)
            $table->timestamp('created_at', 3)->useCurrent();
        });
    }

    public function down(): void {
        Schema::dropIfExists('chat_messages');
    }
};

