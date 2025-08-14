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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('item_no')->nullable();
            $table->string('name')->nullable();
            $table->string('customer_name')->nullable();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->text('para1')->nullable();
            $table->text('para2')->nullable();
            $table->text('gallery')->nullable();
            $table->text('slug')->nullable();//string
            $table->string('project_status')->nullable();
            $table->string('project_date')->nullable();
            $table->string('status')->nullable()->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
