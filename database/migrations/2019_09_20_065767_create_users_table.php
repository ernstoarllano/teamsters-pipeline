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
            $table->increments('id');
            $table->string('name');
            $table->string('username');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('postcode', 10);
            $table->string('phone');
            $table->boolean('available');
            $table->boolean('alerts');
            $table->string('driver_class')->nullable();
            $table->timestamp('last_called')->nullable();
            $table->integer('previous_job_state')->unsigned();
            $table->foreign('previous_job_state')->references('id')->on('states');
            $table->string('previous_contractor');
            $table->integer('job_id')->unsigned();
            $table->foreign('job_id')->references('id')->on('jobs');
            $table->string('email')->unique();
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
