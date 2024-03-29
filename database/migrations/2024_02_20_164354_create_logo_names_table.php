<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('logo_names', function (Blueprint $table) {
            $table->id();
            $table->mediumText('name')->nullable();
            $table->string('history')->nullable();
            $table->string('vision')->nullable();
            $table->string('aboutbanner')->nullable();
            $table->string('jobbanner')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('logo_names');
    }
};
