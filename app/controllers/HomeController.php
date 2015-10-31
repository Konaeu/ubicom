<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function index(){
		$news=News::take(6)->orderBy('created_at','desc')->get();	
		$notices=Notices::take(6)->orderBy('created_at','desc')->get();
		return View::make('home.main')->with('news',$news)->with('notices',$notices);
	} 

 
	public function news(){
		$news=News::paginate(4); //分页显示
		return View::make('home.news')->with('news',$news);
	}


	public function newsDetail($id){
		$news=News::where('id','=',$id)->get();
		//dd($news[0]->title);
		return View::make('home.news-detail')->with('news',$news[0]);
	}
	public function notices(){
		$notices=Notices::paginate(6); //分页显示
		return View::make('home.notice')->with('notices',$notices);
	}

	public function noticesDetail($id){
		$notice=Notices::where('id','=',$id)->get();; //分页显示
		return View::make('home.notice-detail')->with('notice',$notice[0]);
	}

	public function research(){
		$researches=Researches::all();		
		return View::make('home.research')->with('researches',$researches);
	}

	public function researchDetail($id){
		$research=Researches::where('id','=',$id)->get();
		//dd($research);
		return View::make('home.research-detail')->with('research',$research[0]);
	}

	public function member(){
		return View::make('home.member');
	}

	public function course($id=1){
 		$course=Courses::find($id);
 		if($course){ 
	 		$comments=Courses::find($id)->comments;
			$homeworks=Courses::find($id)->homework;
			$coursewares=Courses::find($id)->courseware;
			$course= Courses::find($id);
			return View::make('home.course')->with('course',$course)
						->with('comments',$comments)
						->with('homeworks',$homeworks)
						->with('coursewares',$coursewares);		 		
		}else{
			return Redirect::to('/');
		}	
	}
	/*
	* $input_name:为表单中的名字
	* $parent_dir_name:为父文件夹：如：C:\xampp\htdoc\ubicom\public\
	* $dir_name：要存该文件到C:\xampp\htdoc\ubicom\public\文件夹中的子文件夹名，例如放在course\infotheory\文件夹中
	*/
	public function upload_files($input_name,$parent_dir_name,$sub_dir_name){

		//判断文件夹是否存在
		if(!is_dir($parent_dir_name.$sub_dir_name)){//判断文件夹是否存在
			mkdir($parent_dir_name.$sub_dir_name, 0777, true);
  		}

  		//上传文件
  		if ($_FILES[$input_name]["error"] > 0){
		 	dd( "Error: " . $_FILES[$input_name]["error"] . "<br />");
		 }else{
		 	if(file_exists($parent_dir_name.$sub_dir_name.$_FILES[$input_name]["name"])){
		  		dd( $_FILES[$input_name]["name"]. " already exists. ");
		  	}else{	
		  		$filename=iconv("UTF-8", "gb2312",$parent_dir_name.$sub_dir_name.$_FILES[$input_name]["name"]);	  		 
				move_uploaded_file($_FILES[$input_name]["tmp_name"],$filename);	  		
		  	}
		 }
		 return $sub_dir_name.$_FILES[$input_name]["name"]; 
	}

	public function upload_course($course_id,$file_source){			
		$input_name=$file_source;	 
		$pathinfo = pathinfo($_FILES[$file_source]["tmp_name"]);
		 
		if(!empty($_FILES[$file_source]["tmp_name"])){
			$pathinfo = pathinfo($pathinfo['dirname']);//获取临时保存文件的路经
			$parent_dir_name= $pathinfo['dirname']."\htdocs\ubicom\public\\";//将文件保存路径修改到public update中
			$sub_dir_name="upload\courses\\".$course_id.'\\';
			$source_address=HomeController::upload_files($input_name,$parent_dir_name,$sub_dir_name);
			return $source_address;
		}else{
			 
			return '';
		}
	 	
	}

	





	public function showWelcome()
	{
		return View::make('hello');
	}

	public function edit($cat_id=0,$item_id=0){
		if($cat_id==0){ //默认为新闻编辑
			$item=News::find($item_id);
			if($item){ //要是编辑文件存在，这时进行修改
				return View::make('home.edit')->with('cat_title','新闻编辑')
							->with('cat_id',$cat_id)
							->with('item_id',$item->id)							
							->with('item_title',$item->title)
							->with('item_abstract',$item->abstract)
							->with('item_content',$item->content);
			}else{
				return View::make('home.edit')->with('cat_title','新闻编辑')
							->with('cat_id',$cat_id)
							->with('item_id',0)
							->with('item_title','')
							->with('item_abstract','')
							->with('item_content','');
			}

		}else if($cat_id==1){ //项目编辑
			$item=Researches::find($item_id);
			if($item){
				return View::make('home.edit')->with('cat_title','项目编辑')
						->with('cat_id',$cat_id)
						->with('item_id',$item->id)
						->with('item_begin_time',$item->begin_time)
						->with('item_end_time',$item->end_time)
						->with('item_title',$item->title)
						->with('item_abstract',$item->abstract)
						->with('item_content',$item->content);
			}else{

				return View::make('home.edit')->with('cat_title','项目编辑')
						->with('cat_id',$cat_id)
						->with('item_id',0)
						->with('item_begin_time','')
						->with('item_end_time','')
						->with('item_title','')
						->with('item_abstract','')
						->with('item_content','');
			}
			
		}else if($cat_id==2){ //通知编辑
			$item=Notices::find($item_id);
			if($item){ //要是编辑文件存在，这时进行修改
				return View::make('home.edit')->with('cat_title','通知编辑')
							->with('cat_id',$cat_id)
							->with('item_id',$item->id)							
							->with('item_title',$item->title)
							->with('item_content',$item->content);
			}else{
				return View::make('home.edit')->with('cat_title','通知编辑')
							->with('cat_id',$cat_id)
							->with('item_id',0)
							->with('item_title','')
							->with('item_content','');
			}	
		}else if($cat_id==3){//课程编辑
			$item=Courses::find($item_id);		

			if($item){ //要是编辑文件存在，这时进行修改
				//$homeworks=Courses::find($item_id)->homework;
				//$coursewares=Courses::find($item_id)->courseware;

			}else{//创建新课程：同时创建homework，coursewares
				$item=new Courses;
				$item->course_name='';
				$item->save();
				$item_id=$item->id;
			}	

			$homeworks=Courses::find($item_id)->homework;
			$coursewares=Courses::find($item_id)->courseware;
				return View::make('home.edit')->with('cat_title','课程编辑')
					->with('cat_id',$cat_id)
					->with('item_id',$item->id)
					->with('course_name',$item->course_name)
					->with('teacher_address',$item->teacher_address)
					->with('TA_name',$item->TA_name)
					->with('TA_address',$item->TA_address)							
					->with('course_info',$item->course_info)
					->with('homeworks',$homeworks)
					->with('coursewares',$coursewares);
		}
	}


	public function saveItem(){
		$cat_id=Input::get('cat_id');
		$item_id=Input::get('id');		
		
		//获取表单
		if($cat_id==0){ //新闻编辑
			$title=Input::get('title');		
			$content=Input::get('content');
			$abstract=Input::get('abstract');
			$item=News::find($item_id);
		}else if($cat_id==1){//项目编辑
			$title=Input::get('title');		
			$content=Input::get('content');
			$abstract=Input::get('abstract');
			$begin_time=Input::get('begin_time');
			$end_time=Input::get('end_time');
			$item=Researches::find($item_id);
		}else if($cat_id==2){//通知编辑
			//
			$title=Input::get('title');		
			$content=Input::get('content');
			$item=Notices::find($item_id);
		}else if($cat_id==3){//课程编辑
			$course_name=Input::get('course_name');
			$course_info=Input::get('course_info');
			$teacher_address=Input::get('teacher_address');
			$TA_name=Input::get('TA_name');
			$TA_address=Input::get('TA_address');
			$item=Courses::find($item_id);
			$homeworks=Courses::find($item_id)->homework;
			$coursewares=Courses::find($item_id)->courseware;
			foreach($homeworks as $homework){//对已有项进行编辑
				$delete_or_not=Input::get('homework_delete'.$homework->id);
				if($delete_or_not){ //如果标记为删除则将已有作业进行删除
					$delete_item=Homework::find($homework->id);
					$delete_item->delete();
				}else{
					$update_item=Homework::find($homework->id);
					$update_item->homework_item=Input::get('homework_label'.$homework->id);
					$update_item->submit_deadline=Input::get('homework_submit_time'.$homework->id);
					$update_item->deliver_deadline=Input::get('homework_deliver_time'.$homework->id);	
					$update_item->save();
				}
			}
			foreach($coursewares as $courseware){ 
				$update_item=Courseware::find($courseware->id);
				$update_item->label=Input::get('courseware_label'.$courseware->id);
				$update_item->save();
			}
		}
		
		//保存数据
		if($item){ //表中已经存在该条目						
			if($cat_id==0)	{//新闻编辑
				$item->title=$title;
				$item->content=$content;
				$item->abstract=$abstract;
				$item->save();
				return Redirect::to(URL::to('/news-detail',[$item_id]));
			}else if($cat_id==1){//项目编辑
				$item->title=$title;
				$item->content=$content;
				$item->abstract=$abstract;
				$item->begin_time=$begin_time;
				$item->end_time=$end_time;
				$item->save();
				return Redirect::to(URL::to('/research-detail',[$item_id]));
			}else if($cat_id==2){//通知编辑
				$item->title=$title;
				$item->content=$content;
				$item->save();
				return Redirect::to(URL::to('/notice-detail',[$item_id]));
			}else if($cat_id==3){//课程编辑
				$item->course_name=$course_name;
				$item->course_info=$course_info;
				$item->teacher_address=$teacher_address;
				$item->TA_name=$TA_name;
				$item->TA_address=$TA_address;
				$item->save();
				$homework_add_count=Input::get('homework_add_count');
				if($homework_add_count){//当添加了新的作业，将其添加到homework数据库中

					for($i=1;$i<=$homework_add_count;$i++){
						$add_or_not=Input::get('homework_add_or_not'.$i);
						if(!$add_or_not){
							$homework=new Homework;
							$homework->course_id=$item_id;						 
							$homework->homework_item=Input::get('homework_add_item'.$i);
							$homework->submit_deadline=Input::get('homework_add_submit_time'.$i);
							$homework->deliver_deadline=Input::get('homework_add_deliver_time'.$i);
							$homework->save();
						}						
					}
				}
				$courseware_add_count=Input::get('courseware_add_count');
				if($courseware_add_count){//当添加了新的课件，将其添加到courseware表中
					for($i=1;$i<=$courseware_add_count;$i++){
						$courseware=new Courseware;
						$courseware->course_id=$item_id;
						$courseware->label=Input::get('courseware_add_label'.$i);
						//先将课件上传到数据库中
						$file_source='courseware_add_source'.$i;						 
						$courseware->source=HomeController::upload_course($item_id,$file_source);
						$courseware->save();
					}
				}
				return Redirect::to(URL::to('/course',[$item_id]));
			}	 

		}else{ //对已有条目进行更新
			if($cat_id==0){ //新闻条目
				News::insert([
				'title'=>$title,
				'abstract'=>$abstract,
				'content'=>$content
				]);
				$item=News::all()->last();				
				return Redirect::to(URL::to('/news-detail',[$item->id]));				 		 
				 
			}else if ($cat_id==1) { //项目条目
				Researches::insert([
				'title'=>$title,
				'abstract'=>$abstract,
				'content'=>$content,
				'begin_time'=>$begin_time,
				'end_time'=>$end_time
				]);
				$item=Researches::all()->last();				
				return Redirect::to(URL::to('/research-detail',[$item->id]));					
			}else if($cat_id==2){//通知编辑
				Notices::insert([
				'title'=>$title,
				'content'=>$content
				]);
				$item=Notices::all()->last();				
				return Redirect::to(URL::to('/notice-detail',[$item->id]));					
			}else if($cat_id==3){
				Courses::insert([
					'course_name'=>$course_name,
					'course_info'=>$course_info,
					'teacher_address'=>$teacher_address,
					'TA_name'=>$TA_name,
					'TA_address'=>$TA_address
					]);
				$item=Courses::all()->last();
				return Redirect::to(URL::to('/course',[$item->id]));					
			}
		}
		//return View::make('/news-detail',[$item_id]);
	}
}