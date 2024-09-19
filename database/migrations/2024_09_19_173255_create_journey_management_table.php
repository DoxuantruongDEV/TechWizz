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
        Schema::create('journey_management', function (Blueprint $table) {
            $table->increments('journey_management_id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->unsignedInteger('travel_itinerary_id');
            $table->foreign('travel_itinerary_id')->references('travel_itinerary_id')->on('travel_itinerary');
            $table->float('travel_expense');
            $table->date('payment_date');
            $table->string('additional', 100);
            $table->float('proceeds');
            $table->string('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journey_management');
    }
};
