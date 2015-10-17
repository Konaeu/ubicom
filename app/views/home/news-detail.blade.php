@extends('layout.news-detail')
@section('news-content')
    <div class='item-content'>   
        <h2 class='item-title'>{{$news->title}}</h2>   
        <div class='item-meta'>
            <i class="icon-user"></i> 刘志强&nbsp;&nbsp;                        
            <i class="icon-calendar"> </i>2015-10-15&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="icon-tag"> </i>
            <a href="#" class='tags-link'>WBAN,</a>
            <a href="#" class='tags-link'>分配策略,</a> 
            <a href="#" class='tags-link'>速率分配</a> 
        </div>     

        <blockquote>
            <div class='item-content-para' id='abstract'>
                摘要：{{$news->abstract}}
            </div>
         </blockquote>
        {{$news->content}}
    
    </div><!--item-info-->
@stop