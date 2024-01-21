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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('createdBy');
            $table->unsignedBigInteger('newsId');
            $table->string('content');
            $table->foreign('createdBy')->references('id')->on('users');
            $table->foreign('newsId')->references('id')->on('news');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
