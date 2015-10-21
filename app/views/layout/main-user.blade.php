<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>用户中心—Ubicom 泛在通信实验室</title>
		{{HTML::style('packages/bootstrap/dist/css/bootstrap.min.css') }}
        {{ HTML::style('css/main.css')}}
    </head>
    <body>
		<div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand hidden-sm" href="/">Ubicom 泛在通信实验室</a>
                </div>
                <ul class="nav navbar-nav navbar-right hidden-sm">
                    @if(!Auth::check())
                        <li><a>游客</a></li>
				        <li>{{ HTML::link('users/register', '注册') }}</li>
				        <li>{{ HTML::link('home', '登陆') }}</li>
					@else
                        <li><a>
                        <?php
                            if(Session::has('usertype'))
                                switch (Session::get('usertype'))
                                {
                                    case 0:
                                        echo "超级管理员";
                                        break;
                                    case 2:
                                        echo "普通用户";
                                        break;
                                    default:
                                        echo "";
                                }
                        ?>
                        </a></li>
                        <li>{{ HTML::link('home/'. Session::get('username'), Session::get('username')) }}</li>
                        <li>{{ HTML::link('users/logout', '退出') }}</li>
					@endif
                </ul>
            </div>
        </div>
		<div class="container">
        @if(Session::has('message'))
        <p class="alert">{{ Session::get('message') }}</p>
        @endif
        {{$content}}
		</div>
    </body>
</html>