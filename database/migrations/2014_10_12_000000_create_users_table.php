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
            $table->bigIncrements('id');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('sub_id')->nullable();
            $table->string('sub_date')->nullable();
            $table->string('otp_code')->nullable();
            $table->tinyInteger('is_activated')->default(0);
            $table->string('photo')->nullable();
            $table->text('about_info')->nullable();
            $table->tinyInteger('job_apply_count')->default(0);
            $table->tinyInteger('active_status')->default(0);
            $table->string('avatar')->default('avatar.png');
            $table->tinyInteger('dark_mode')->default(0); // Corrected the default value
            $table->string('messenger_color')->nullable();
            $table->string('remember_token', 100)->nullable();
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
