@extends('layout.edit')

@section('form-begin')
    	{{Form::open(['url'=>'/edit'])}}
    		{{Form::text('id',$item_id,['style'=>'display:none'])}}
    		{{Form::text('cat_id',$cat_id,['style'=>'display:none'])}}
    		{{Form::label('title','标题:',['class'=>'sub-label'])}} 	
    		{{Form::textarea('title',$item_title,['id'=>'sub-title','class'=>'sub-text'])}}
    		@if($cat_id==1) 
	    		{{Form::label('begin_time','开始时间：',['class'=>'sub-label'])}} 	
	    		{{Form::text('begin_time',$item_begin_time,['id'=>'sub-title','class'=>'sub-text'])}}
    			{{Form::label('end_time','结束时间：',['class'=>'sub-label'])}} 	
	    		{{Form::text('end_time',$item_begin_time,['id'=>'sub-title','class'=>'sub-text'])}}
    		@endif
    		{{Form::label('abstract','摘要:',['class'=>'sub-label'])}} 
    		{{Form::textarea('abstract',$item_abstract,['id'=>'sub-abstract','class'=>'sub-text'])}}		
@stop

@section('form-end')
			{{Form::text('content','',['id'=>'sub-content','style'=>'display:none'])}}
    		{{Form::submit('提交',['id'=>'subBt','class'=>'btn btn-success'])}}
		{{Form::close()}}
@stop