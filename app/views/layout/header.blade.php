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

        <!-- CSS Bootstrap & Custom -->
        {{HTML::style('css/bootstrap.css',['media' => 'screen'])}}
        {{HTML::style('css/animate.css',['media' => 'screen'])}}
        {{HTML::style('css/font-awesome.min.css',['media' => 'screen'])}}
        {{HTML::style('css/templatemo_impressum-style.css',['media' => 'screen'])}}
       
        <!-- JavaScripts -->
        {{HTML::script('js/jquery-1.10.2.min.js')}}
        {{HTML::script('js/modernizr.js')}}

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
                <li><a href="#portfolio">人员构成</a></li>
                <li><a href="#partners">课程主页</a></li>
                <li><a href="#our-team">文化生活</a></li>
                <li><a href="#contact">内部门户</a></li>
            </ul>
            

        </div>
            <!-- Header -->
            <header id="header" class="site-header" role="banner">
            <div class="container">
            <div class="row">                
                <div class="col-md-4 logo">
                    <h1><a href="#"><em>Ubi</em>Com</a></h1>
                    <span>中科大泛在通信实验室</span>
                </div> <!-- //.logo -->
                
                <div class="col-md-8">
                <nav id="navigation" class="hidden-sm hidden-xs">
                    <ul id="main-nav" class="main-navigation">
                    <li class="current"><a href={{URL::to('/')}}>首页</a></li>
                    <li><a href={{URL::to('/research')}}>科研进展</a></li>
                    <li><a href="#portfolio">人员构成</a></li>
                    <li><a href="#partners">课程主页</a></li>
                    <li><a href="#our-team">文化生活</a></li>
                    <li><a href="#contact">内部门户</a></li>
                    </ul>
                </nav>
                
                <a href="#mobile-menu" class="visible-xs visible-sm mobile-menu-trigger"><i class="fa  fa-reorder"></i></a>
                
                </div>
                
            </div> <!-- //.row -->
            </div> <!-- //.container -->
                
            </header>