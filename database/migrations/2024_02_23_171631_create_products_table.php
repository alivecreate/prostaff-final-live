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
        Schema::create('products', function (Blueprint $table) {    
            $table->id();
            $table->integer('item_no')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->text('slug')->nullable();
            $table->text('page_title')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->text('image')->nullable();//string
            $table->text('image_title')->nullable();//string
            $table->decimal('discounted_price', 10, 2)->nullable();
            $table->integer('quantity')->nullable();
            $table->string('sku')->unique()->nullable();
            $table->integer('status')->default(1)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
