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
		$news=News::all();
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

	public function showWelcome()
	{
		return View::make('hello');
	}


	

	public function saveNews(){
		$title=Input::get('title');
		$abstract=Input::get('abstract');
		$content=Input::get('content');
		News::insert([
			'title'=>$title,
			'abstract'=>$abstract,
			'content'=>$content
			]);
		return $content;
	}
}