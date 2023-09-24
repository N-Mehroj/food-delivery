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
        Schema::create('owers', function (Blueprint $table) {
            $table->id();
            $table->string('ad_fullname');
            $table->string('ad_phone')->nullable()->default('phone soon');
            $table->string('ad_email')->unique();
            $table->boolean('ad_verifiy')->nullable()->default(false);
            $table->string('ad_password');
            $table->string('ad_status');
            $table->string('ad_url')->nullable();
            $table->string('ad_verified_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owers');
    }
};
