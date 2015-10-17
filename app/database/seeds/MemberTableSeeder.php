<?php
class MemberTableSeeder extends Seeder{
	public function run(){
		DB::table('members')->insert([
			['name'=>'刘志强','phone'=>'15156059638','email'=>'lzhq28@mail.ustc.edu.cn','isadmin'=>'1'],
			['name'=>'郭乾','phone'=>'88888888','email'=>'guoqian@mail.ustc.edu.cn','isadmin'=>'0'],
			['name'=>'邹磊','phone'=>'88888888','email'=>'zoulei@mail.ustc.edu.cn','isadmin'=>'1'],
			]);
	}
}