<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->mediumText('heading')->nullable();
            $table->mediumText('description')->nullable();
            $table->mediumText('link')->nullable();
            $table->string('link_name')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default('0')->nullable;
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('banners');
    }
};
