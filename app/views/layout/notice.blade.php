@include('layout.header')
    <!-- Research Section -->
    <section id="portfolio" class="content-section clearfix">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2 class="section-title left">实验室通知</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-3 detail-filter">
            <ul id="filters" class="col-md-12 col-sm-12 folio-filters">
                <li class=""><a href="#" data-filter=".webdesign">最新通知</a></li>
                <li class=""><a href="#" data-filter=".photography">重要通知</a></li>
            </ul>
            </div>
            <div class='details-list col-md-10 col-sm-9'>
                @yield('notices-content')
                
            </div><!--research-details-->
        </div>  <!--row--> 
    </section>

@include('layout.footer')
