@extends('layout.news')
@section('news-content')
	@foreach($news as $new)
	<div class="details-item col-md-6 col-sm-6 ">
        <!--<div class="col-sm-4">
            <img class="img-responsive" src="images/templatemo_image_10.jpg" alt="image 10" />
        </div>-->         
            <h2 class="feature-title">
                <span></span>
                <a class='title-link' href={{URL::to('/news-detail',[$new->id])}}>{{$new->title}}</a>
            </h2>
            
            <p>                        
                <i class="icon-user"></i> {{$new->user_id}}&nbsp;&nbsp;
             	<i class="icon-calendar"> </i>{{$new->create_at}}&nbsp;&nbsp;                    
            </p>
            <p>{{$new->abstract}}</p>
    </div>

	@endforeach
@stop