<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->longText('slug')->nullable();
            $table->boolean('status')->default(0);
            $table->integer('order')->nullable();
            $table->string('image')->nullable();
            $table->string('banner_image')->nullable();
            $table->longText('description')->nullable();
            $table->longText('other_description')->nullable();
            $table->longText('additional_description')->nullable();
            $table->longText('short_description')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->string('seo_schema')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
};