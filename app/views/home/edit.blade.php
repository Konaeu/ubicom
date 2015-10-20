@extends('layout.edit')

@section('form-begin')
    	{{Form::open(['url'=>'/edit'])}}
            {{Form::text('id',$item_id,['style'=>'display:none'])}}
            {{Form::text('cat_id',$cat_id,['style'=>'display:none'])}}
            @if(($cat_id==0)||($cat_id==1)||($cat_id==2)) 
        		{{Form::label('title','标题:',['class'=>'sub-label'])}} 	
        		{{Form::textarea('title',$item_title,['id'=>'sub-title','class'=>'sub-text'])}}
    		@endif
            @if($cat_id==1) 
	    		{{Form::label('begin_time','开始时间：',['class'=>'sub-label'])}} 	
	    		{{Form::text('begin_time',$item_begin_time,['id'=>'sub-title','class'=>'sub-text'])}}
    			{{Form::label('end_time','结束时间：',['class'=>'sub-label'])}} 	
	    		{{Form::text('end_time',$item_end_time,['id'=>'sub-title','class'=>'sub-text'])}}
    		@endif
    		@if($cat_id==0||$cat_id==1)
	    		{{Form::label('abstract','摘要:',['class'=>'sub-label'])}} 
	    		{{Form::textarea('abstract',$item_abstract,['id'=>'sub-abstract','class'=>'sub-text'])}}		
	    	@endif
            @if($cat_id==3)
                {{Form::text('id',$item_id,['style'=>'display:none'])}}
                {{Form::text('cat_id',$cat_id,['style'=>'display:none'])}}
                {{Form::label('course_name','课程名:',['class'=>'sub-label'])}}   
                {{Form::text('course_name',$course_name,['id'=>'sub-title','class'=>'sub-text'])}}
                {{Form::label('course_info','课程信息:',['class'=>'sub-label'])}}  
                {{Form::textarea('course_info',$course_info,['id'=>'sub-abstract','class'=>'sub-text'])}}
                {{Form::label('teacher_address','老师地址:',['class'=>'sub-label'])}}   
                {{Form::text('teacher_address',$teacher_address,['id'=>'sub-title','class'=>'sub-text'])}}
                {{Form::label('TA_name','助教姓名:',['class'=>'sub-label'])}}   
                {{Form::text('TA_name',$TA_name,['id'=>'sub-title','class'=>'sub-text'])}}
                {{Form::label('TA_address','助教地址:',['class'=>'sub-label'])}}   
                {{Form::text('TA_address',$TA_address,['id'=>'sub-title','class'=>'sub-text'])}}
            @endif	
@stop

@section('form-center')

    @if(($cat_id==0)||($cat_id==1)||($cat_id==2)) 
        @parent
        <div id="editor">
            {{$item_content}}
        </div>  
    @endif

@stop

@section('form-end')
			{{Form::text('content','',['id'=>'sub-content','style'=>'display:none'])}}
    		{{Form::submit('提交',['id'=>'subBt','class'=>'btn btn-success'])}}
		{{Form::close()}}
@stop