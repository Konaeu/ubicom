<?php 
class UsersController extends BaseController {
    protected $layout = "users.main";

	public function __construct() {
		//构造方法放在其他方法前，使用post提交表单。	
		$this->beforeFilter('csrf', array('on'=>'post'));
		//未登录重定向
		$this->beforeFilter('auth', array('only'=>array('getDashboard')));
	}
	

	public function getRegister() {
		$this->layout->content = View::make('users.register');
	}
	
	public function postCreate() {
		$validator = Validator::make(Input::all(), User::$rules);
		
		if ($validator->passes()) {
			// 验证通过就存储用户数据
			$user = new User;//实例化User对象
			$user->username = Input::get('username');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->save();

			return Redirect::to('users/login')->with('message', '欢迎注册，好好玩耍!');
		} else {
			// 验证没通过就显示错误提示信息 
			return Redirect::to('users/register')->with('message', '请您正确填写下列数据')->withErrors($validator)->withInput();
		}
	}
	
	public function getLogin() {
		$this->layout->content = View::make('users.login');
	}
	public function postSignin() {
		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
			return Redirect::to('users/dashboard')->with('message', '欢迎登录');
		} else {
		return Redirect::to('users/login')->with('message', '用户名或密码错误')->withInput();
		}
	}

	public function getDashboard() {
		$this->layout->content = View::make('users.dashboard');
	}
	
	public function getLogout() {
		//清理session
        if(Auth::check())
        { 
            Auth::logout();
        } 
		return Redirect::to('users/login')->with('message','你现在已经退出登录了!'); 
    }
}	
?>