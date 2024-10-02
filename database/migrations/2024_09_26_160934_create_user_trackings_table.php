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
        Schema::create('user_trackings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('login_user_id');
            $table->string('session_id')->nullable();
            $table->string('date_time')->nullable();
            $table->string('requested_url')->nullable();
            $table->string('user_ip')->nullable();
            $table->string('user_device')->nullable();
            $table->string('referer_page')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_trackings');
    }
};
