<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyHookMatches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matched_hooks', function (Blueprint $table) {
            $table->uuid('match_id');
            $table->uuid('request_id');
            $table->uuid('booking_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('matched_hooks', function (Blueprint $table) {
            $table->dropColumn(['match_id','request_id','booking_id']);
        });
    }
}
