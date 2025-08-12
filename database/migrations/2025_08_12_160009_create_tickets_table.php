<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->text('code')->unique();
            $table->text('title');
            $table->text('description');
            $table->foreignId('user_id')->constrained('users')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreignId('status_id')->constrained('statuses')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreignId('category_id')->constrained('categories')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreignId('assigned_to')->nullable()->constrained('users')->nullOnDelete()->cascadeOnUpdate();
            $table->foreignId('priority_id')->nullable(); // foreign table belum didefinisikan
            $table->timestamp('timeline', 3);
            $table->timestamp('created_date', 3);
            $table->timestamp('completed_date', 3);
            $table->timestamps(3);
        });
    }

    public function down(): void {
        Schema::dropIfExists('tickets');
    }
};
