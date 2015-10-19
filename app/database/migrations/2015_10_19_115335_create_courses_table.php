<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
			$table->increments('id');			
			$table->string('course_name',100);
			$table->text('course_info');
			$table->string('teacher_name',50);
			$table->string('teacher_mail',50);
			$table->string('teacher_address',100);
			$table->string('TA_name',50);
			$table->string('TA_mail',50);
			$table->string('TA_address',100);
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
		Schema::drop('courses');
	}

}
