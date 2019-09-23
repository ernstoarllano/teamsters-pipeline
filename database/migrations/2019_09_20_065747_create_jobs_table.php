<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->json('local_union')->nullable();
            $table->timestamp('job_notification_date')->nullable();
            $table->string('contractor')->nullable();
            $table->string('company')->nullable();
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states');
            $table->longText('work_description')->nullable();
            $table->string('superintendent')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->decimal('pay', 6, 2);
            $table->string('slug')->unique();
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
        Schema::dropIfExists('jobs');
    }
}
