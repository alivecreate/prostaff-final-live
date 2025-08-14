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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->integer('item_no')->nullable();
            $table->text('name'); //string
            $table->text('heading')->nullable(); //string
            $table->integer('parent_id')->default(0)->nullable();
            $table->text('description')->nullable();
            $table->text('full_description')->nullable();
            $table->text('image')->nullable();//string
            $table->text('image_title')->nullable();//string
            $table->text('page_title')->nullable();//string
            $table->text('slug')->nullable();//string
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
