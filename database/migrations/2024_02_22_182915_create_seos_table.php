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
        Schema::create('seos', function (Blueprint $table) {
            $table->id();
            $table->text('search_index')->nullable();//string
            $table->text('search_follow')->nullable();//string
            $table->text('canonical_url')->nullable();//string
            $table->text('meta_title')->nullable(); 
            $table->Text('meta_keyword')->nullable();
            $table->Text('meta_description')->nullable();
            $table->unsignedBigInteger('seoable_id');
            $table->string('seoable_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seos');
    }
};
