<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHookRequestIdFromHookMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hook_messages', function (Blueprint $table) {
            $table->unsignedBigInteger('request_id');
            $table->foreign('request_id')->references('id')->on('hook_requests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hook_messages', function (Blueprint $table) {
            $table->dropColumn(['request_id']);
        });
    }
}
