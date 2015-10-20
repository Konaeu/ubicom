<?php

class AdminController extends \BaseController {
 
 	public function index(){
 		return Redirect::to('news-edit');
 	}

 	public function userEdit(){
 		$users=User::paginate(10);
 		return View::make('admin.user-edit')->with('users',$users);
 	}

 	public function userDelete(){
 		$user_id=Input::get('deleteId');
 		User::find($user_id)->delete();
 		return Redirect::to('user-edit');
 	}

 	public function newsEdit(){
 		$news=News::paginate(10);
 		return View::make('admin.news-edit')->with('news',$news);
 	}

 	public function newsDelete(){
 		$news_id=Input::get('deleteId');
 		News::find($news_id)->delete();
 		return Redirect::to('news-edit');
 	}

 	public function researchEdit(){
 		$researches=Researches::paginate(10);
 		return View::make('admin.research-edit')->with('researches',$researches);
 	}

 	public function researchDelete(){
 		$news_id=Input::get('deleteId');
 		News::find($news_id)->delete();
 		return Redirect::to('news-edit');
 	}
 	public function noticeEdit(){
 		$notices=Notices::paginate(10);
 		return View::make('admin.notice-edit')->with('notices',$notices);
 	}

 	public function noticeDelete(){
 		$news_id=Input::get('deleteId');
 		News::find($news_id)->delete();
 		return Redirect::to('news-edit');
 	}
 	public function courseEdit(){
 		$courses=Courses::paginate(10);
 		return View::make('admin.course-edit')->with('courses',$courses);
 	}

 	public function courseDelete(){
 		$news_id=Input::get('deleteId');
 		News::find($news_id)->delete();
 		return Redirect::to('news-edit');
 	}
}