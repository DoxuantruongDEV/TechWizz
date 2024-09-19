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
        Schema::create('travel_itinerary', function (Blueprint $table) {
            $table->increments('travel_itinerary_id');
            $table->unsignedInteger('trip_id');
            $table->foreign('trip_id')->references('trip_id')->on('trips');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->string('travel_itinerary_name', 50);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('current_journey', 100);
            $table->string('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_itinerary');
    }
};
