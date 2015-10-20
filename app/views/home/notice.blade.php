@extends('layout.notice')
@section('notices-content')
	@foreach($notices as $notice)
	<div class="details-item col-md-6 col-sm-6 ">
        <!--<div class="col-sm-4">
            <img class="img-responsive" src="images/templatemo_image_10.jpg" alt="image 10" />
        </div>-->         
            <h2 class="feature-title">
                <span></span>
                <a class='title-link' href={{URL::to('/notice-detail',[$notice->id])}}>{{$notice->title}}</a>
            </h2>
            
            <p>                        
             	<i class="icon-calendar"> </i>2015&nbsp;&nbsp;                    
            </p>
            <p>{{$notice->content}}</p>
    </div>

	@endforeach
   <?php echo $notices->links(); ?> 
@stop