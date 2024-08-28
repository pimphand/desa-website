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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title')->index();
            $table->string('slug')->unique()->index();
            $table->text('description')->index();
            $table->dateTime('start_date')->nullable()->index();
            $table->dateTime('end_date')->nullable()->index();
            $table->string('location')->index();
            $table->string('image')->nullable();
            $table->boolean('is_published')->default(false)->index();
            $table->dateTime('published_at')->nullable()->index();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
