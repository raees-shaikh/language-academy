<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('flag');
            $table->string('country');
            $table->string('course_name');
            $table->string('short_description');
            $table->text('description');
            $table->text('overview');
            $table->text('basic_course');
            $table->text('elementary');
            $table->text('independent');
            $table->text('autonomous');
            $table->text('course_plan');
            $table->text('certification');
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
        Schema::dropIfExists('courses');
    }
}
