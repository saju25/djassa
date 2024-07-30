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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('sub_id')->nullable();
            $table->string('sub_date')->nullable();
            $table->string('otp_code')->nullable();
            $table->boolean('is_activated')->default(0);
            $table->string('photo')->nullable();
            $table->text('about_info')->nullable();
            $table->boolean('job_apply_count')->nullable()->default(0);
            $table->boolean('active_status')->nullable()->default(0);
            $table->string('avatar')->default("avatar.png");
            $table->boolean('dark_mode')->default("avatar.png");
            $table->string('messenger_color')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
