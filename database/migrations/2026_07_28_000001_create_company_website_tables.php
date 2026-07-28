<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('description');
            $table->string('icon');
            $table->string('color')->default('#00A8FF');
            $table->string('link')->default('#');
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });

        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category');
            $table->string('image');
            $table->string('link')->default('#');
            $table->boolean('is_featured')->default(true);
            $table->timestamps();
        });

        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('badge')->nullable();
            $table->string('price');
            $table->string('original_price')->nullable();
            $table->boolean('is_popular')->default(false);
            $table->json('features');
            $table->timestamps();
        });

        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation');
            $table->string('avatar');
            $table->integer('rating')->default(5);
            $table->text('comment');
            $table->timestamps();
        });

        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category');
            $table->string('views')->default('১.৫k');
            $table->string('image');
            $table->text('excerpt');
            $table->timestamps();
        });

        Schema::create('contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('message');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_messages');
        Schema::dropIfExists('blogs');
        Schema::dropIfExists('testimonials');
        Schema::dropIfExists('packages');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('services');
    }
};
