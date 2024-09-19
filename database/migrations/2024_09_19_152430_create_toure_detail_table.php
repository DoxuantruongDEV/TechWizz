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
        Schema::create('toure_detail', function (Blueprint $table) {
            $table->increments('toure_detail_id');
            $table->integer('toure_id');
            $table->integer('quantity');
            $table->string('description');
            $table->string('category');
            $table->float('cost');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toure_detail');
    }
};
