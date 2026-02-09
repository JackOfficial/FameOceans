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
            $table->id();
             $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('blog_category_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->string('title');
            $table->string('slug')->unique();

            $table->string('excerpt', 500)->nullable();
            $table->longText('content');

            $table->string('featured_image')->nullable();

            // SEO
            $table->string('meta_title')->nullable();
            $table->string('meta_description', 255)->nullable();
            // Publishing control
            $table->enum('status', ['draft', 'published', 'scheduled'])
                ->default('draft');

            $table->timestamp('published_at')->nullable();

            // Analytics
            $table->unsignedBigInteger('views')->default(0);
            $table->timestamps();
            $table->index(['status', 'published_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
