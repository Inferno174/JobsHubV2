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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_category_id');
            $table->foreign('job_category_id')->references('id')->on('job_categories')->onDelete('cascade');
            $table->unsignedBigInteger('job_name_id');
            $table->foreign('job_name_id')->references('id')->on('jobs_list')->onDelete('cascade');
            $table->string('blog_title_english')->nullable();
            $table->string('blog_title_hindi')->nullable();
            $table->string('blog_title_tamil')->nullable();
            $table->string('salary')->nullable();
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->string('blog_image')->nullable();
            $table->string('blog_link')->nullable();
            $table->string('blog_description_tamil')->nullable();
            $table->string('blog_description_english')->nullable();
            $table->string('blog_description_hindi')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
