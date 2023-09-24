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
        Schema::create('restorans', function (Blueprint $table) {
            $table->id();
            $table->string('restorans_name');
            $table->string('market_logo');
            $table->string('working_time');
            $table->string('restorans_info');
            $table->string('tag');
            $table->string('user_id');
            $table->string('restorans_banner');
            $table->string('weekly_bonuses');
            $table->string('rating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restorans');
    }
};
