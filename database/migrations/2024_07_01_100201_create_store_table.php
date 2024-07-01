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
        Schema::create('store', function (Blueprint $table) {
             $table->id();
             $table->string('store_name');
             $table->unsignedBigInteger('company_name');
             $table->unsignedBigInteger('employee_name');
             $table->unsignedBigInteger('teacher_name');
             $table->foreign('employee_name')->references('id')->on('employees')->onDelete('cascade');
             $table->foreign('company_name')->references('com_id')->on('companies')->onDelete('cascade');
             $table->foreign('teacher_name')->references('id')->on('teacher')->onDelete('cascade');
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('store');
    }
};
