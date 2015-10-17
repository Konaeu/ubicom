<?php
class NewsTableSeeder extends Seeder{
	public function run(){
		DB::table('news')->insert([
			['title'=>'微软亚洲研究院Tao Mei研究员高水平学术前沿讲座','abstract'=>'微软亚洲研究院Tao Mei研究员应电子工程与信息科学系和多媒体计算与通信-教育部微软重点实验室的邀请在科大西区科技实验楼西楼1213会议室做题为《When Video Understanding Meets Deep Learning》的高水平学术前沿讲座','content'=>'nothing is everthing!nothing is everthing!'],
			['title'=>'美国罗彻斯特大学罗杰波教授来我系做高水平前沿讲座','abstract'=>'美国罗彻斯特大学罗杰波教授应电子工程与信息科学系和多媒体计算与通信-教育部微软重点实验室的邀请访问我系，并为我系师生带来一场题为《Big data. Better Life》的研究生高水平前沿讲座。讲座由李厚强教授主持。','content'=>'nothing is everthing!nothing is everthing!'],
			['title'=>'北京大学林宙辰教授来我系做高水平学术前沿讲座','abstract'=>'北京大学林宙辰教授应电子工程与信息科学系和多媒体计算与通信-教育部微软重点实验室的邀请，在科大西区科技实验楼西楼1213会议室做题为《 Subspace Clustering – Recent Advances》的高水平学术前沿讲座','content'=>'nothing is everthing!nothing is everthing!'],
			['title'=>'首届“中国科大·电子信息论坛”成功举办','abstract'=>'2015年7月23日，首届“中国科大·电子信息论坛”在中国科学技术大学西校区成功举办。','content'=>'nothing is everthing!nothing is everthing!'],
			['title'=>'与ustc6er 同行——电子工程与信息科学系介绍','abstract'=>'与USTC6ER 同行——电子工程与信息科学系介绍','content'=>'nothing is everthing!nothing is everthing!'],
			['title'=>'美国福特汉姆大学David S.L. Wei教授高水平前沿讲座','abstract'=>'7月14日上午，应薛开平副教授的邀请，美国福特汉姆大学David S.L. Wei教授访问我系，并为我系师生带来一场题为《Important Issues in Legacy and Next Generation Wireless Networks》的研究生高水平前沿讲座。讲座由系主任俞能海教授主持。','content'=>'nothing is everthing!nothing is everthing!'],
			]);
	}
}