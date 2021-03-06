@extends('layout.main')
@section('news-content')
	@foreach($news as $new)
		<div class="col-md-4 col-sm-6 animated-item feature-item fadeInUp" data-delay="200">
        <div class="feature-info">
            <h3 class="feature-title"><span></span><a href={{URL::to('/news-detail',[$new->id])}}>{{$new->title}}</a></h3>
            <i class="icon-user"></i> {{$new->user_id}}&nbsp;&nbsp;
             <i class="icon-calendar"> </i>{{$new->create_at}}&nbsp;&nbsp;
            <p>{{$new->abstract}}</p>
        </div>
        </div>
	@endforeach
@stop

@section('notices-content')
    @foreach($notices as $notice)
        <div class="col-md-4 col-sm-6 animated-item feature-item fadeInUp" style='height:150px;overflow:hidden' data-delay="200">
        <div class="feature-info">
            <h3 class="feature-title"><span></span><a href={{URL::to('/notice-detail',[$notice->id])}}>{{$notice->title}}</a></h3>
             <i class="icon-calendar"> </i>{{$notice->create_at}}&nbsp;&nbsp;
            <p>{{$notice->content}}</p>
        </div>
        </div>
    @endforeach
@stop