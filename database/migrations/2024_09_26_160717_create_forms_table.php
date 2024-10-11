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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_category_id');
            $table->unsignedBigInteger('job_id');
            $table->foreign('job_category_id')->references('id')->on('job_categories')->onDelete('cascade');
            $table->foreign('job_id')->references('id')->on('jobs_list')->onDelete('cascade');
            $table->string('company_ids')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->Integer('created_by')->nullable();
            $table->Integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
