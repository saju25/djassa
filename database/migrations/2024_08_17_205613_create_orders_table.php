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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('add_id')->nullable(); // Keep only one definition
            $table->string('post_by_user')->nullable(); // Keep only one definition
            $table->string('user_id')->nullable(); // Keep only one definition
            $table->string('quantity')->nullable();
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->text('weight')->nullable();
            $table->decimal('total_amount', 10, 2)->nullable();
            $table->string('city')->nullable();
            $table->string('number')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('dcompany')->nullable();
            $table->string('status')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
