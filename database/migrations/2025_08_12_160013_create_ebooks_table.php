<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
    public function up(): void {
        Schema::create('ebooks', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('description');
            $table->text('file_path');
            $table->timestamps(3);
        });
    }

    public function down(): void {
        Schema::dropIfExists('ebooks');
    }
};
