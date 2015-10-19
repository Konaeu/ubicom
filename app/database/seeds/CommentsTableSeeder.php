<?php
class CommentsTableSeeder extends Seeder{
	public function run(){
		DB::table('comments')->insert([
			['course_id'=>1,'comment'=>'这是course1的第一个评论'],
			['course_id'=>1,'comment'=>'这时course1的第二个评论'],]);
	}
}