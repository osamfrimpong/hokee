<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateHookRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hook_requests', function (Blueprint $table) {
            $table->string('interested_in');
            $table->boolean('paid')->default(false);
            $table->uuid('request_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hook_requests', function (Blueprint $table) {
            $table->dropColumn(['interested_in','paid','request_id']);
        });
    }
}
