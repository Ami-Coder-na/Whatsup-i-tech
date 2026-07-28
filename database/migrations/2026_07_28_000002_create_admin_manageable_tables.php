<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('demo_categories', function (Blueprint $table) {
            $table->id();
            $table->string('cat_key')->unique();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('icon')->default('fa-layer-group');
            $table->string('image')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });

        Schema::create('demo_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('demo_category_id')->constrained('demo_categories')->onDelete('cascade');
            $table->string('name');
            $table->string('url');
            $table->string('badge')->default('Hot');
            $table->timestamps();
        });

        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('image');
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });

        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('site_settings');
        Schema::dropIfExists('galleries');
        Schema::dropIfExists('demo_links');
        Schema::dropIfExists('demo_categories');
    }
};
