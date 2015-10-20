<?php
class CoursewareTableSeeder extends Seeder{
	public function run(){
		DB::table('courseware')->insert([
			['course_id'=>1,'label'=>'第1章：绪论; 第2章：熵、相对熵和互信息','source'=>'upload\course\infotheory\ch1-2.pdf'],
			['course_id'=>1,'label'=>'第3章：渐进均分性','source'=>'upload\course\infotheory\ch-3.pdf'],
			['course_id'=>1,'label'=>'第4章：随机过程的熵率','source'=>'upload\course\infotheory\ch-4.pdf'],
			['course_id'=>1,'label'=>'第5章：数据压缩','source'=>'upload\course\infotheory\ch-5.pdf']]);
	}
}