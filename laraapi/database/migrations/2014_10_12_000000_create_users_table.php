<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('phone')->nullable()->default(null);
            $table->string('password');
            $table->boolean('phone_verification')->nullable()->default(false);
            $table->boolean('email_verification')->nullable()->default(false);
            $table->string('token');
            $table->string('lang')->default('en');
            $table->string('user_bonus')->nullable()->default(0);
            $table->string('status')->default('person');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
