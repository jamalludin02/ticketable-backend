<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('description');
            $table->timestamps(3);
        });
    }

    public function down(): void {
        Schema::dropIfExists('categories');
    }
};