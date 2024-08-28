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
        Schema::create('log_pages', function (Blueprint $table) {
            $table->id();
            $table->string('url')->index();
            $table->string('method')->index();
            $table->string('ip')->nullable()->index();
            $table->string('user_agent')->nullable()->index();
            $table->string('referrer')->nullable()->index();
            $table->string('locale')->nullable()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_pages');
    }
};
