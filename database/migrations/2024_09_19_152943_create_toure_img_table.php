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
        Schema::create('toure_img', function (Blueprint $table) {
            $table->increments('toure_img_id');
            $table->unsignedInteger('toure_id');
            $table->foreign('toure_id')->references('toure_id')->on('toure');
            $table->unsignedInteger('toure_detail_id');
            $table->foreign('toure_detail_id')->references('toure_detail_id')->on('toure_detail');
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
            $table->string('img4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toure_img');
    }
};
