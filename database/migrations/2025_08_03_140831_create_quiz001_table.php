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
        Schema::create('quiz001', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('numbers')->nullable();
            $table->float('real')->nullable();
            $table->string('sentence')->nullable();
            $table->date('dateof')->nullable();
            $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz001');
    }
};
