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
        Schema::create('posts', function (Blueprint $table) {
            $table->dropForeign(['post_id']);

            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('sku')->nullable();
            $table->text('description')->nullable();
            $table->decimal('best_price', 10, 2);
            $table->decimal('discounted_price', 10, 2)->nullable();
            $table->json('color')->nullable();
            $table->json('weight')->nullable();
            $table->json('size')->nullable();
            $table->json('img_path')->nullable();
            $table->string('add_category')->nullable();
            $table->string('sub_cate')->nullable();
            $table->string('city')->nullable();
            $table->string('location')->nullable();
            $table->timestamps();

        });
        Schema::dropIfExists('posts');

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Recreate the posts table if needed
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            // Define other columns
            $table->timestamps();
        });

// Add foreign key constraint again
        Schema::table('deliveries', function (Blueprint $table) {
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });

    }
};
