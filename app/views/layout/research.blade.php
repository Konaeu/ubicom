@include('layout.header')
  

    <!-- Research Section -->
    <section id="portfolio" class="content-section clearfix">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2 class="section-title left">科研方向</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-3 detail-filter">
            <ul id="filters" class="folio-filters">
                <li class=""><a href="#" data-filter=".webdesign">所有研究项目</a></li>
                <li class=""><a href="#" data-filter=".photography">正在研究项目</a></li>
                <li class=""><a href="#" data-filter=".branding">已发表文献</a></li>
                <li class=""><a href="#" data-filter=".award">获奖情况</a></li>
            </ul>
            </div>
            <div class='details-list col-md-10 col-sm-9'>
                @yield('research-content')
                 
                 
            </div><!--details-list-->
        </div>  <!--row--> 
    </section>

@include('layout.footer')
