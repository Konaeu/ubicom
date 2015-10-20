@include('layout.header')
<!-- Research Section -->
    <section id="portfolio" class="content-section clearfix">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2 class="section-title left">超级管理员</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-3 detail-filter">
            <ul class="col-md-12 col-sm-12 folio-filters">
                <li ><a href={{URL::to('/user-edit')}} >用户管理</a></li>
                <li ><a href={{URL::to('/news-edit')}} >新闻管理</a></li>
                <li ><a href={{URL::to('/research-edit')}} >项目管理</a></li>
                <li ><a href="#notice-tag" >通知管理</a></li>
                <li ><a href="#homework-tag" >课程管理</a></li>
            </ul>
            </div>
            <div class='details-list col-md-10 col-sm-9'>
                @yield('admin-content')
                
            </div><!--research-details-->
        </div>  <!--row--> 
    </section>
@include('layout.footer')