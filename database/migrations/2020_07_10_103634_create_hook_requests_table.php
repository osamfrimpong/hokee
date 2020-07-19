<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHookRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hook_requests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('location');
            $table->mediumText('message');
            $table->unsignedBigInteger('hookee');
            $table->unsignedBigInteger('service_id');
            $table->foreign('hookee')->references('id')->on('users');
            $table->foreign('service_id')->references('id')->on('services');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hook_requests');
    }
}
