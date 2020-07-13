<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->nullable();
            $table->string('email')->unique();
            $table->unsignedSmallInteger('age')->nullable();
            $table->string('interested_in');
            $table->string('occupation')->nullable();
            $table->string('sex');
            $table->string('phone')->unique();
            $table->string('profile_picture')->nullable();
            $table->unsignedTinyInteger('account_type')->default(0);
            $table->boolean('paid')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
