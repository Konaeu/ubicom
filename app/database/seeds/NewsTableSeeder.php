<?php
class NewsTableSeeder extends Seeder{
	public function run(){
		DB::table('news')->insert([
			['title'=>'第一个新闻','abstract'=>'第一个新闻的摘要','content'=>'nothing is everthing!nothing is everthing!'],
			['title'=>'第二个新闻','abstract'=>'第二个新闻的摘要','content'=>'nothing is everthing!nothing is everthing!'],
			['title'=>'第三个新闻','abstract'=>'第三个新闻的摘要','content'=>'nothing is everthing!nothing is everthing!'],
			['title'=>'第四个新闻','abstract'=>'第四个新闻的摘要','content'=>'nothing is everthing!nothing is everthing!'],
			['title'=>'第五个新闻','abstract'=>'第五个新闻的摘要','content'=>'nothing is everthing!nothing is everthing!'],
			['title'=>'第六个新闻','abstract'=>'第六个新闻的摘要','content'=>'nothing is everthing!nothing is everthing!'],
			]);
	}
}