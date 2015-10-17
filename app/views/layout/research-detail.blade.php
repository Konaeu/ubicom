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
            <div class="col-md-2 col-sm-2 detail-filter">
            <ul id="filters" class="folio-filters">
                <li class=""><a href="#" data-filter=".webdesign">所有研究项目</a></li>
                <li class=""><a href="#" data-filter=".photography">正在研究项目</a></li>
                <li class=""><a href="#" data-filter=".branding">已发表文献</a></li>
                <li class=""><a href="#" data-filter=".award">获奖情况</a></li>
            </ul>
            </div>
            <div class='item-info col-md-10 col-sm-10'>
                @yield('research-content')
                  
                <!--表格展示发表论文-->
                <!--<table class='table table-bordered table-hover'>
                    <caption>已发表会议文章</caption>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>文章引用</th>
                            <th>链接</th>
                            <th>发表时间</th>
                        </tr>
                    </thead>
                        <tr> 
                            <td>1</td>
                            <td>Zou L, Liu B, Chen C, et al. Bayesian game based power control scheme for inter-WBAN interference mitigation[C]//Global Communications Conference (GLOBECOM), 2014 IEEE. IEEE, 2014: 240-245.</td>
                            <td>.pdf</td>
                            <th>2014</th>
                        </tr>
                        <tr> 
                            <td>2</td>
                            <td>Zou L, Liu B, Chen C, et al. Bayesian game based power control scheme for inter-WBAN interference mitigation[C]//Global Communications Conference (GLOBECOM), 2014 IEEE. IEEE, 2014: 240-245.</td>
                            <td>.pdf</td>
                            <th>2014</th>
                        </tr>
                        <tr> 
                            <td>3</td>
                            <td>Zou L, Liu B, Chen C, et al. Bayesian game based power control scheme for inter-WBAN interference mitigation[C]//Global Communications Conference (GLOBECOM), 2014 IEEE. IEEE, 2014: 240-245.</td>
                            <td>.pdf</td>
                            <th>2014</th>
                        </tr>
                    <tbody>
                    </tbody>
                </table>-->


                 
                
                 
                 
            </div><!--item-info-->
        </div>  <!--row--> 
    </section>

@include('layout.footer')
