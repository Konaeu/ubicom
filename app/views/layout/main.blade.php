 @include('layout.header')
    <!-- Introduction Section  -->
    <section id="introduction" class=" content-section clearfix">
        <div class="flexslider introduction-slider">
        <ul class="slides">
            <li> 
            <div class="flex-caption section-overlay slide-caption">
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <h1>无线体域网</h1>
                    <h2>
                        无线体域网是一种以人体为中心，由人体穿戴式传感器、人体植入式传感器和中心节点组成的新型传感器网络。人体内外的传感器节点采集人体和人体周围环境的相关信息. 
                    </h2>
                    <a class="slide-button">更多详情</a>
                    </div>
                </div>
                </div>
            </div> 
            {{HTML::image('images/slides/slide1.jpg')}}
            <!--<img src="images/slides/slide1.jpg" alt="slide-01">  -->
            </li>

            <li> 
            <div class="flex-caption section-overlay slide-caption">
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <h1>无线体域网</h1>
                    <h2>
                        无线体域网是一种以人体为中心，由人体穿戴式传感器、人体植入式传感器和中心节点组成的新型传感器网络。人体内外的传感器节点采集人体和人体周围环境的相关信息，并传输给中心节点进行处理。中心节点可以进一步将数据传输给远程服务器存储和处理。 
                    </h2>
                    <a class="slide-button">更多详情</a>
                    </div>
                </div>
                </div>
            </div> 
            {{HTML::image('images/slides/slide2.jpg')}}
            <!--<img src="images/slides/slide1.jpg" alt="slide-01">  -->
            </li>

            <li> 
            <div class="flex-caption section-overlay slide-caption">
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <h1>无线体域网</h1>
                    <h2>
                        无线体域网是一种以人体为中心，由人体穿戴式传感器、人体植入式传感器和中心节点组成的新型传感器网络。人体内外的传感器节点采集人体和人体周围环境的相关信息，并传输给中心节点进行处理。中心节点可以进一步将数据传输给远程服务器存储和处理。 
                    </h2>
                    <a class="slide-button">更多详情</a>
                    </div>
                </div>
                </div>
            </div> 
            {{HTML::image('images/slides/slide3.jpg')}}
            <!--<img src="images/slides/slide1.jpg" alt="slide-01">  -->
            </li>
        </ul>

        <div class="slide-navigation">
            <a href="#" class="slide-prev"><i class="fa fa-arrow-left"></i></a>
            <a href="#" class="slide-next"><i class="fa fa-arrow-right"></i></a>
        </div>
        
        </div> <!-- //.flexslider -->
    </section>

    <!-- News Section -->
    <section id="news" class="content-section clearfix">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2 class="section-title left">实验室新闻&nbsp;<b class='section-title-more'><a href={{URL::to('/news')}}>更多新闻</a></b></h2>
            </div>
        </div>
        <div class="row">
            
            <div class="col-md-4 col-sm-6 animated-item feature-item fadeInUp" data-delay="200">
            <div class="feature-info">
                <h3 class="feature-title"><span></span><a href={{URL::to('/news-detail')}}>中国科学技术大学泛在通信实验室</a></h3>
                <i class="icon-user"></i> 刘志强&nbsp;&nbsp;
                 <i class="icon-calendar"> </i>2015-10-15&nbsp;&nbsp;
                <p>无线体域网是一种以人体为中心，由人体穿戴式传感器、人体植入式传感器和中心节点组成的新型传感器网络。人体内外的传感器节点采集人体和人体周围环境的相关信息，并传输给中心节点进行处理。中心节点可以进一步将数据传输给远程服务器存储和处理。</p>
            </div>
            </div>

            <div class="col-md-4 col-sm-6 animated-item feature-item fadeInUp" data-delay="200">
            <div class="feature-info">
                <h3 class="feature-title"><span></span><a href={{URL::to('/news-detail')}}>中国科学技术大学泛在通信实验室</a></h3>
                <i class="icon-user"></i> 刘志强&nbsp;&nbsp;
                 <i class="icon-calendar"> </i>2015-10-15&nbsp;&nbsp;
                <p>无线体域网是一种以人体为中心，由人体穿戴式传感器、人体植入式传感器和中心节点组成的新型传感器网络。人体内外的传感器节点采集人体和人体周围环境的相关信息，并传输给中心节点进行处理。中心节点可以进一步将数据传输给远程服务器存储和处理。</p>
            </div>
            </div>

            <div class="col-md-4 col-sm-6 animated-item feature-item fadeInUp" data-delay="200">
            <div class="feature-info">
                <h3 class="feature-title"><span></span><a href={{URL::to('/news-detail')}}>中国科学技术大学泛在通信实验室</a></h3>
                <i class="icon-user"></i> 刘志强&nbsp;&nbsp;
                 <i class="icon-calendar"> </i>2015-10-15&nbsp;&nbsp;
                <p>无线体域网是一种以人体为中心，由人体穿戴式传感器、人体植入式传感器和中心节点组成的新型传感器网络。人体内外的传感器节点采集人体和人体周围环境的相关信息，并传输给中心节点进行处理。中心节点可以进一步将数据传输给远程服务器存储和处理。</p>
            </div>
            </div>
            <div class="col-md-4 col-sm-6 animated-item feature-item fadeInUp" data-delay="200">
            <div class="feature-info">
                <h3 class="feature-title"><span></span><a href={{URL::to('/news-detail')}}>中国科学技术大学泛在通信实验室</a></h3>
                <i class="icon-user"></i> 刘志强&nbsp;&nbsp;
                 <i class="icon-calendar"> </i>2015-10-15&nbsp;&nbsp;
                <p>无线体域网是一种以人体为中心，由人体穿戴式传感器、人体植入式传感器和中心节点组成的新型传感器网络。</p>
            </div>
            </div>  
            <div class="col-md-4 col-sm-6 animated-item feature-item fadeInUp" data-delay="200">
            <div class="feature-info">
                <h3 class="feature-title"><span></span><a href={{URL::to('/news-detail')}}>中国科学技术大学泛在通信实验室</a></h3>
                <i class="icon-user"></i> 刘志强&nbsp;&nbsp;
                 <i class="icon-calendar"> </i>2015-10-15&nbsp;&nbsp;
                <p>无线体域网是一种以人体为中心，由人体穿戴式传感器、人体植入式传感器和中心节点组成的新型传感器网络。</p>
            </div>
            </div>  
            <div class="col-md-4 col-sm-6 animated-item feature-item fadeInUp" data-delay="200">
            <div class="feature-info">
                <h3 class="feature-title"><span></span><a href={{URL::to('/news-detail')}}>中国科学技术大学泛在通信实验室</a></h3>
                <i class="icon-user"></i> 刘志强&nbsp;&nbsp;
                 <i class="icon-calendar"> </i>2015-10-15&nbsp;&nbsp;
                <p>无线体域网是一种以人体为中心，由人体穿戴式传感器、人体植入式传感器和中心节点组成的新型传感器网络。。</p>
            </div>
            </div>         
        </div> <!-- //.row -->
        </div> <!-- //.container -->
    </section>
    <!-- Contact Section -->
    <section id="contact" class="content-section clearfix">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2 class="section-title left">联系我们</h2>
            </div>
        </div>
        <div class="row">
            
            <div class="col-md-6 contact-info">
            <ul>
                <li><i class="fa fa-user"></i>刘斌 副教授</li>
                <li><i class="fa fa-map-marker"></i>安徽省合肥市中国科学技术大学西区电三楼317室，230027</li>
                <li><i class="fa fa-phone"></i>88888888</li>
                <li><i class="fa fa-envelope"></i><a href="mailto:">flowice@ustc.edu.cn</a></li>
            </ul>
            
            </div>
            <div class="col-md-5 col-md-offset-1 contact-info">
            <h4>欢迎加入我们</h4>
            <p>我是欢迎词，我是欢迎词，我是欢迎词，我是欢迎词，我是欢迎词，我是欢迎词，
                我是欢迎词，我是欢迎词，我是欢迎词，我是欢迎词，
            </p>
            

            </div>
               
        </div> <!-- //.row -->

        </div> <!-- //.container -->
    </section>

@include('layout.footer')
