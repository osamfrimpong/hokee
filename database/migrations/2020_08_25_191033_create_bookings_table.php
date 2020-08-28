<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->uuid('request_id');
            $table->boolean('paid')->default(false);
            $table->boolean('matched')->default(false);
            $table->foreign('user_id')->references('id')->on('users');
            $table->uuid('booking_id');
            $table->unique(['user_id','request_id']);
            // $table->foreign('request_id')->references('request_id')->on('hook_requests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
