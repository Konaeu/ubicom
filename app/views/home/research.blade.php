@extends('layout.research')
@section('research-content')
	@foreach($researches as $research)
                <div class="details-item col-md-6 col-sm-6 ">
                    <!--<div class="col-sm-4">
                        <img class="img-responsive" src="images/templatemo_image_10.jpg" alt="image 10" />
                    </div>-->         
                        <h2 class="feature-title">
                            <span></span>
                            <a class='title-link' href={{URL::to('/research-detail',[$research->id])}}>{{$research->title}}</a>
                        </h2>
                        
                        <p>                        
                            <i class="icon-calendar"></i> {{$research->begin_time}} &nbsp;&nbsp; 
                            <i class="icon-calendar"></i> {{$research->end_time}} &nbsp;&nbsp;                      
                        </p>
                        <p> {{$research->abstract}}
                            <!--<a href="#" class="btn btn-default margin_top">read more</a>-->
                        </p>
                </div>
    @endforeach
@stop