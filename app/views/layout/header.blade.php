<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
    	<!-- 
    	Impressum Template
    	http://www.templatemo.com/preview/templatemo_432_impressum
    	-->
        <title>Ubicom 泛在通信实验室</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta charset="UTF-8">
        <link rel="apple-touch-icon" href="//mindmup.s3.amazonaws.com/lib/img/apple-touch-icon.png" />
        <link rel="shortcut icon" href="http://mindmup.s3.amazonaws.com/lib/img/favicon.ico" >
        <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
        <!-- CSS Bootstrap & Custom -->
        {{HTML::style('css/bootstrap.css',['media' => 'screen'])}}
        {{HTML::style('css/animate.css',['media' => 'screen'])}}
        {{HTML::style('css/font-awesome.min.css',['media' => 'screen'])}}
        {{HTML::style('css/templatemo_impressum-style.css',['media' => 'screen'])}}
        {{HTML::style('external/google-code-prettify/prettify.css')}}
        <!-- JavaScripts -->
        {{HTML::script('js/jquery-1.10.2.min.js')}}
        {{HTML::script('js/modernizr.js')}}
        {{HTML::script('js/bootstrap-wysiwyg.js')}}
        {{HTML::script('external/jquery.hotkeys.js')}}
        <!--[if lt IE 8]>
	    <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
        <![endif]-->

 
    </head>
    <body>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="mobile-nav hide-nav hidden-md hidden-lg">
            <div class="mobile-menu-close">
            <button type="button" class="close" aria-hidden="true"><span>关闭</span>&times;</button>
            </div>
           
            <ul class="mobile-navigation">
                <li><a href={{URL::to('/')}}>首页</a></li>
                <li><a href={{URL::to('/research')}}>科研进展</a></li>
                <li><a href={{URL::to('/member')}}>人员构成</a></li>
                <li><a href={{URL::to('/course')}}>课程主页</a></li>
                <li><a href='/'>文化生活</a></li>
                <li><a href={{URL::to('/admin')}}>内部门户</a></li>
            </ul>
            

        </div>
            <!-- Header -->
            <header id="header" class="site-header" role="banner">
            <div class="container">
            <div class="row">                
                <div class="col-md-4 logo">
                    <h1><a href={{URL::to('/')}}><em>Ubi</em>Com</a></h1>
                    <span>中科大泛在通信实验室</span>
                </div> <!-- //.logo -->
                
                <div class="col-md-8">
                <nav id="navigation" class="hidden-sm hidden-xs">
                    <ul id="main-nav" class="main-navigation">
                    <li class="current"><a href={{URL::to('/')}}>首页</a></li>
                    <li><a href={{URL::to('/research')}}>科研进展</a></li>
                    <li><a href={{URL::to('/member')}}>人员构成</a></li>
                    <li><a href={{URL::to('/course')}} id='courses_list'>课程主页</a> </li>
                    <li><a href='#'>文化生活</a></li>
                    <li><a href={{URL::to('/admin')}}>内部门户</a></li>
                    </ul>
                </nav>
                
                <a href="#mobile-menu" class="visible-xs visible-sm mobile-menu-trigger"><i class="fa  fa-reorder"></i></a>
                
                </div>
                
            </div> <!-- //.row -->
            </div> <!-- //.container -->
                
            </header>