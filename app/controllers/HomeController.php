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
		$news=News::take(6)->orderBy('created_at')->get();	

		return View::make('home.main')->with('news',$news);
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

	public function course($course_name='infotheory'){
		switch ($course_name) {
			case 'infotheory':
				$comments=Courses::find(1)->comments;
				$homeworks=Courses::find(1)->homework;
				$coursewares=Courses::find(1)->courseware;
				$course= Courses::find(1);
				return View::make('home.course')->with('course',$course)
							->with('comments',$comments)
							->with('homeworks',$homeworks)
							->with('coursewares',$coursewares);

				break;
			
			default:
				# code...
				break;
		}	
	}

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

	public function upload(){	
		$label_id=Input::get('label_id');		
		$input_name="file";
		$pathinfo = pathinfo($_FILES["file"]["tmp_name"]);
	 	$pathinfo = pathinfo($pathinfo['dirname']);//获取临时保存文件的路经
		$parent_dir_name= $pathinfo['dirname']."\htdocs\ubicom\public\\";//将文件保存路径修改到public update中
		$sub_dir_name="upload\course\infotheory\\";
		$source_address=HomeController::upload_files($input_name,$parent_dir_name,$sub_dir_name);
		$courseware=Courseware::find($label_id);
		if($courseware){
			$courseware->source=$source_address;
			$courseware->save();
		} 
		return Redirect::to('/course');
	}
	/*
	* $input_name:为表单中的名字
	* $parent_dir_name:为父文件夹：如：C:\xampp\htdoc\ubicom\public\
	* $dir_name：要存该文件到C:\xampp\htdoc\ubicom\public\文件夹中的子文件夹名，例如放在course\infotheory\文件夹中
	*/
	





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

			//return View::make('home.edit')->with('cat_title','新闻编辑');
		}else if($cat_id==1){ //项目编辑
			$item=Researches::find($item_id);
			if($item){
				return View::make('home.edit')->with('cat_title','项目编辑')
						->with('cat_id',$cat_id)
						->with('item_id',$item->id)
						->with('item_title',$item->title)
						->with('item_abstract',$item->abstract)
						->with('item_content',$item->content);
			}else{

				return View::make('home.edit')->with('cat_title','项目编辑')
						->with('cat_id',$cat_id)
						->with('item_id',0)
						->with('item_title','')
						->with('item_abstract','')
						->with('item_content','');
			}
			
		}else{
			
		}
	}


	public function saveItem(){
		$cat_id=Input::get('cat_id');
		$item_id=Input::get('id');		
		$title=Input::get('title');
		$abstract=Input::get('abstract');
		$content=Input::get('content');
		if($cat_id==0){
			$item=News::find($item_id);
		}else if($cat_id==1){
			$item=Researches::find($item_id);
		}
		
		 
		
		if($item){ //表中已经存在该条目
			$item->title=$title;
			$item->abstract=$abstract;
			$item->content=$content;
			$item->save();
			if($cat_id==0)	{
				return Redirect::to(URL::to('/news-detail',[$item_id]));
			}else if($cat_id==1){
				return Redirect::to(URL::to('/research-detail',[$item_id]));
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
				'content'=>$content
				]);
				$item=Researches::all()->last();				
				return Redirect::to(URL::to('/research-detail',[$item->id]));					
			}
		}
		//return View::make('/news-detail',[$item_id]);
	}
}