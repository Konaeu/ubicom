<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CoursesTable extends Migration {

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
			$table->text('course_info')->default('');
			$table->string('teacher_name',50)->default('刘斌');
			$table->string('teacher_mail',50)->default('');
			$table->string('teacher_address',100)->default('');
			$table->string('TA_name',50)->default('');
			$table->string('TA_mail',50)->default('');
			$table->string('TA_address',100)->default('');
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
