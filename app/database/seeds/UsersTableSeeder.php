<?php
class UsersTableSeeder extends Seeder{
	public function run(){
		DB::table('users')->insert([
			['username'=>'aaaaaaa','email'=>'lzhqs@mail.ustc.edu.cn','password'=>'111111'],
			['username'=>'baaaaaa','email'=>'lzhq2@mail.ustc.edu.cn','password'=>'111111'],
			['username'=>'caaaaaa','email'=>'lzhq3@mail.ustc.edu.cn','password'=>'111111'],
			['username'=>'daaaaaa','email'=>'lzhq4@mail.ustc.edu.cn','password'=>'111111'],
			['username'=>'eaaaaaa','email'=>'lzhq5@mail.ustc.edu.cn','password'=>'111111'],
			['username'=>'faaaaaa','email'=>'lzhq6@mail.ustc.edu.cn','password'=>'111111'],
			['username'=>'gaaaaaa','email'=>'lzhq7@mail.ustc.edu.cn','password'=>'111111'],
			['username'=>'haaaaaa','email'=>'lzhq8@mail.ustc.edu.cn','password'=>'111111'],
			['username'=>'iaaaaaa','email'=>'lzhq9@mail.ustc.edu.cn','password'=>'111111'],
			['username'=>'jaaaaaa','email'=>'lzhq10@mail.ustc.edu.cn','password'=>'111111'],
			['username'=>'laaaaaa','email'=>'lzhq11@mail.ustc.edu.cn','password'=>'111111'],
			['username'=>'maaaaaa','email'=>'lzhq12@mail.ustc.edu.cn','password'=>'111111'],
			['username'=>'naaaaaa','email'=>'lzhq13@mail.ustc.edu.cn','password'=>'111111'],
			['username'=>'oaaaaaa','email'=>'lzhq14@mail.ustc.edu.cn','password'=>'111111'],
			['username'=>'apaaaaaa','email'=>'lzh15@mail.ustc.edu.cn','password'=>'111111'],
			['username'=>'qaaaaaa','email'=>'lzhq16@mail.ustc.edu.cn','password'=>'111111'],
			 ]);
	}
}