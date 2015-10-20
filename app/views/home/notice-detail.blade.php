@extends('layout.notice-detail')
@section('notices-content')
    <div class='item-content'>   
        <h2 class='item-title'>{{$notice->title}}</h2>   
        <div class='item-meta'>                        
            <i class="icon-calendar"> </i>2015-10-15&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="icon-tag"> </i>
        </div>     
        {{$notice->content}}
    
    </div><!--item-info-->
@stop