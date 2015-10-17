@extends('layout.research-detail')
@section('research-content')
	<div class='item-content'>   
	    <h2 class='item-title'>{{$research->title}}</h2>   
	    <div class='item-meta'>
	        <i class="icon-calendar"> </i>{{$research->begin_time}}&nbsp;&nbsp;                        
	        <i class="icon-calendar"> </i>{{$research->end_time}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        <i class="icon-tag"> </i>
	        <a href="#" class='tags-link'>WBAN,</a>
	        <a href="#" class='tags-link'>分配策略,</a> 
	        <a href="#" class='tags-link'>速率分配</a> 
	    </div>     
	    <blockquote>
	    <div class='item-content-para' id='abstract'>
	        摘要：{{$research->abstract}}
	    </div>
	 </blockquote>
	 {{$research->content}}
	</div><!--item-content-->
@stop