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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->integer('item_no')->nullable();
            $table->text('title')->nullable();
            $table->text('heading')->nullable();
            $table->longText('description')->nullable();
            $table->text('image')->nullable();

            $table->text('image_alt')->nullable();
            $table->text('image_title')->nullable();
            
            $table->text('page_title')->nullable();
            $table->text('slug')->nullable();

            $table->integer('status')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
