@extends('layout.course')
@section('course-content')
<div id='brief-tag' >  
        <h2 class="feature-title">
            <span></span>
            <a class='title-link'>课程简介</a>
        </h2>
        
        <p> {{$course->course_info}}</p>
</div>
<div id='contact-tag' >  
        <h2 class="feature-title">
            <span></span>
            <a class='title-link' >联系方式</a>
        </h2>
        <p>授课老师：{{$course->teacher_name}} 副教授	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 老师邮箱：{{$course->teacher_mail}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;地址：{{$course->teacher_address}}<br/>
        	课程助教：{{$course->TA_name}} 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 邮箱：{{$course->TA_mail}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;地址：{{$course->TA_address}}<br/>
        </p>
         
</div>
<div id='notice-tag' >  
        <h2 class="feature-title">
            <span></span>
            <a class='title-link'>通知</a>
        </h2>
        <table class='table table-bordered table-hover'>
            <thead>
                <tr>
                    <th>通知</th>
                    <th>通知时间</th>
                </tr>
            </thead>
            @foreach($comments as $comment)
            <tr>
                <td>{{$comment->comment}}</td>
                <td>{{$comment->created_at}}</td>
            </tr>
            @endforeach
        </table>
        
</div>
<div id='homework-tag' >  
        <h2 class="feature-title">
            <span></span>
            <a class='title-link'>作业</a>
        </h2>
        <table class='table table-bordered table-hover'>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>作业内容</th>
                            <th>提交时间</th>
                            <th>发放时间</th>
                        </tr>
                    </thead>
                    <div style='display:none'>{{$count=0}}</div>
                     @foreach($homeworks as $homework)
                        <tr> 
                            <td>{{++$count}}</td>
                            <td>{{$homework->homework_item}}</td>
                            <td>{{$homework->submit_deadline}}</td>
                            <th>{{$homework->deliver_deadline}}</th>
                        </tr> 
                    @endforeach
        </table>
</div>

        <h2 class="feature-title">
            <span></span>
            <a class='title-link' >课件</a>
        </h2>  
        <table class='table table-bordered table-hover'>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>内容</th>
                            <th>课件</th>
                            <th>更新时间</th>
                        </tr>
                    </thead>
                    <div style='display:none'>{{$count=0}}</div>
                    @foreach($coursewares as $courseware)  
                        <tr> 
                            <td>{{++$count}}</td>
                            <td>{{$courseware->label}}</td>
                            @if($courseware->source=='')
                                <td>等待上传</td>
                            @else
                                <td><a href={{URL::to($courseware->source)}}>{{basename($courseware->source)}}</a></td>
                            @endif
                            <th>{{$courseware->updated_at}}</th>
                        </tr> 
                    @endforeach
        </table>
 

@stop