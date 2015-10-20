<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CoursewareTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courseware', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('course_id');
			$table->text('label'); //保存章节介绍
			$table->string('source',100); //保存ppt的位置
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
		Schema::drop('courseware');
	}

}
