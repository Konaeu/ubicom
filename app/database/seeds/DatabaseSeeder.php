<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('NewsTableSeeder');
		$this->call('ResearchesTableSeeder');
		$this->call('CoursewareTableSeeder');
		$this->call('CoursesTableSeeder');
		$this->call('CommentsTableSeeder');
		$this->call('HomeworkTableSeeder');
		$this->call('UsersTableSeeder');
	}

}