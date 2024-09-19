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
        Schema::create('toure', function (Blueprint $table) {
            $table->increments('toure_id');
            $table->string('toure_name', 50);
            $table->string('destination', 50);
            $table->date('start_date');
            $table->date('end_date');
            $table->float('budget');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toure');
    }
};
