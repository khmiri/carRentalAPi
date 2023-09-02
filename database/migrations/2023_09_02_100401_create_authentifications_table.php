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
        Schema::create('authentifications', function (Blueprint $table) {
            $table->id();
        $table->unsignedBigInteger('user_id');
        $table->string('token');
        $table->string('device_id'); // If you want to track the device
        $table->string('ip_address'); // To store the user's IP address
        $table->timestamp('expires_at')->nullable(); // Token expiration time (optional)
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authentifications');
    }
};
