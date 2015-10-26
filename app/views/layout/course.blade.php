@include('layout.header')
<!-- Research Section -->
    <section id="portfolio" class="content-section clearfix">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2 class="section-title left">{{$course->course_name}}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-3 detail-filter">
            <ul id="filters" class="col-md-12 col-sm-12 folio-filters">
                <li class=""><a href="/course/#brief-tag" >课程简介</a></li>
                <li class=""><a href="#contact-tag" >联系方式</a></li>
                <li class=""><a href="#notice-tag" >通知</a></li>
                <li class=""><a href="#homework-tag" >作业</a></li>
                <li class=""><a href="/course#lecture-tag" >课件</a></li>
            </ul>
            </div>
            <div class='details-list col-md-10 col-sm-9'>
                @yield('course-content')
                
            </div><!--research-details-->
        </div>  <!--row--> 
    </section>

@include('layout.footer')