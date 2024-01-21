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
        Schema::create('mu', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
            $table->string('cim');
            $table->string('eredeti');
            $table->string('szinhaz');
            $table->integer('ev');
            $table->integer('felvonas');
            $table->integer('kep');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mu');
    }
};
