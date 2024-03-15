<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('myname')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->date('dob')->nullable();
            $table->enum('blood_group', ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'])->nullable();
            $table->string('social_id')->nullable();
            $table->string('passport_no')->nullable();
            $table->string('cell_no')->nullable();
            $table->string('emergency_contact_no')->nullable();
            $table->string('email')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('facebook')->nullable();
            $table->string('github')->nullable();
            $table->string('behance')->nullable();
            $table->string('portfolio')->nullable();
            $table->string('degree_type')->nullable();
            $table->json('education')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('portfolios');
    }
};
