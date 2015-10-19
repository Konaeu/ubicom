<?php
class CoursesTableSeeder extends Seeder{
	public function run(){
		DB::table('courses')->insert([
			['course_name'=>'信息论基础','course_info'=>'《信息论基础》是为高等学校信息与计算科学专业本科生编写的教材。内容包括概率论的基础知识，香农提出的有关信息量化的基本概念、方法和定理，以及信源的基本编码理论和信道的基本编码理论.','teacher_name'=>'刘斌','teacher_mail'=>'flowice@ustc.edu.cn'
			,'teacher_address'=>'西区新科技楼西楼1711','TA_name'=>'刘志强','TA_mail'=>'lzhq28@mail.ustc.edu.cn','TA_address'=>'电三楼317'],
			 ]);
	}
}