<?php
class NewsTableSeeder extends Seeder{
	public function run(){
		DB::table('news')->insert([
			['title'=>'1 new','content'=>'nothing is everthing!nothing is everthing!'],
			['title'=>'2 new','content'=>'nothing is everthing!nothing is everthing!'],
			['title'=>'3 new','content'=>'nothing is everthing!nothing is everthing!'],
			['title'=>'4 new','content'=>'nothing is everthing!nothing is everthing!'],
			['title'=>'5 new','content'=>'nothing is everthing!nothing is everthing!'],
			]);
	}
}