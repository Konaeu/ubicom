@include('layout.header')
  

    <!-- Research Section -->
    <section id="portfolio" class="content-section clearfix">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2 class="section-title left">实验室新闻</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-2 detail-filter">
            <ul id="filters" class="col-md-12 col-sm-12 folio-filters">
                <li class=""><a href="#" data-filter=".webdesign">最新新闻</a></li>
                <li class=""><a href="#" data-filter=".photography">最热新闻</a></li>
                <li class=""><a href="#" data-filter=".branding">实验室活动</a></li>
                <li class=""><a href="#" data-filter=".award">周报</a></li>
            </ul>
            </div>
            <div class='item-info col-md-10 col-sm-10'>
                @yield('news-content')
                 

            </div><!--research-details-->
        </div>  <!--row--> 
    </section>

@include('layout.footer')
