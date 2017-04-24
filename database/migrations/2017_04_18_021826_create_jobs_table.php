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
            $table->string('category_id');
            $table->string('company_name');
            $table->string('name');
            $table->integer('opening');
            $table->string('short_description');
            $table->text('total_description');
            $table->string('requirement');
            $table->string('salary');
            $table->string('education');
            $table->string('experience');
            $table->string('job_location');
            $table->string('working_hours');
            $table->date('job_display_duration');
            $table->boolean('job_status');
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
