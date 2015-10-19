@extends('layout.course')
@section('course-content')
<div id='brief-tag' >  
        <h2 class="feature-title">
            <span></span>
            <a class='title-link' href='/course/#'>课程简介</a>
        </h2>
        
        <p> {{$course->course_info}}</p>
</div>
<div id='contact-tag' >  
        <h2 class="feature-title">
            <span></span>
            <a class='title-link' href='/course/#'>联系方式</a>
        </h2>
        <p>授课老师：{{$course->teacher_name}} 副教授	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 老师邮箱：{{$course->teacher_mail}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;地址：{{$course->teacher_address}}<br/>
        	课程助教：{{$course->TA_name}} 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 邮箱：{{$course->TA_mail}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;地址：{{$course->TA_address}}<br/>
        </p>
         
</div>
<div id='notice-tag' >  
        <h2 class="feature-title">
            <span></span>
            <a class='title-link' href='/course/#'>通知</a>
        </h2>
        @foreach($comments as $comment)
        <p>{{$comment->comment}}</p>
        @endforeach
</div>
<div id='homework-tag' >  
        <h2 class="feature-title">
            <span></span>
            <a class='title-link' href='/course/#'>作业</a>
        </h2>
        @foreach($homeworks as $homework)
        <p>{{$homework->homework_item}}</p>
        @endforeach
</div>
<div id='lecture-tag' >  
        <h2 class="feature-title">
            <span></span>
            <a class='title-link' href='/course/#'>课件</a>
        </h2>
        <p> 这是课程简介这是课程简介这是课程简介这是课程简介这是课程简介这是课程简介这是课程简介这是课程简介这是课程简介这是课程简介这是课程简介这是课程简介</p>
</div>
@stop