<?php

class AdminController extends \BaseController {
 
 	public function index(){
 		return Redirect::to('user-edit');
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
}