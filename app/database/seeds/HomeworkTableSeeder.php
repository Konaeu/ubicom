<?php
class HomeworkTableSeeder extends Seeder{
	public function run(){
		DB::table('homework')->insert([
			['course_id'=>1,'homework_item'=>'作业1：2.7，2.10，2.12，2.18，2.40. 提交时间：2015-9-14 ，发放时间：2015-9-17'],
			['course_id'=>1,'homework_item'=>'作业2：2.23，2.29，2.31，2.39. 提交时间：2015-9-14 ，发放时间：2015-9-17'],]);
	}
}