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
        Schema::create('abroad_universities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->longText('slug')->nullable();
            $table->boolean('status')->default(0);
            $table->integer('order')->nullable();
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->longText('other_description')->nullable();
            $table->longText('short_description')->nullable();
            $table->integer('abroad_id');
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
        Schema::dropIfExists('abroad_universities');
    }
};