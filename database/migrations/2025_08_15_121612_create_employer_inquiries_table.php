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
    Schema::create('employer_inquiries', function (Blueprint $table) {
        $table->id();
        $table->string('company_name');
        $table->string('job_requirement')->nullable();
        $table->string('country', 100)->nullable();
        $table->string('phone', 30);
        $table->string('email');
        $table->string('note', 1000)->nullable();
        $table->timestamps();
    });
}
};
