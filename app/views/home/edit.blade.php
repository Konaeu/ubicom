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
                <div class='col-md-6 col-sm-6'>
                {{Form::label('course_name','课程名:',['class'=>'sub-label'])}}   
                {{Form::text('course_name',$course_name,['id'=>'sub-title','class'=>'sub-text'])}}
                {{Form::label('course_info','课程信息:',['class'=>'sub-label'])}}  
                {{Form::textarea('course_info',$course_info,['id'=>'sub-abstract','class'=>'sub-text'])}}
                </div>
                <div class='col-md-6 col-sm-6'>
                {{Form::label('teacher_address','老师地址:',['class'=>'sub-label'])}}   
                {{Form::text('teacher_address',$teacher_address,['id'=>'sub-title','class'=>'sub-text'])}}
                </div>
                <div class='col-md-6 col-sm-6'>

                {{Form::label('TA_name','助教姓名:',['class'=>'sub-label'])}}   
                {{Form::text('TA_name',$TA_name,['id'=>'sub-title','class'=>'sub-text'])}}
                {{Form::label('TA_address','助教地址:',['class'=>'sub-label'])}}   
                {{Form::text('TA_address',$TA_address,['id'=>'sub-title','class'=>'sub-text'])}}
                </div>
                 <div class='col-md-12 col-sm-11'>                    
                    {{Form::label('Homeworks_label','作业编辑:',['class'=>'sub-label'])}}   
                    <table class='table table-bordered table-hover'>
                        <thead>
                            <tr>
                                <th>章节</th>
                                <th>内容</th>
                                <th>提交截至时间</th>
                                <th>发放时间</th>
                            </tr>
                        </thead>
                        @if($homeworks)
                            @foreach($homeworks as $homework)  
                                <tr> 
                                    <td>{{$homework->id}}</td>
                                    <td>{{Form::text('homework_label'.$homework->id,$homework->homework_item,['id'=>'sub-title','class'=>'sub-text'])}}</td>
                                    <th>{{Form::text('homework_submit_time'.$homework->id,$homework->deliver_deadline,['id'=>'sub-title','class'=>'sub-text'])}}</th>
                                    <th>{{Form::text('homework_deliver_time'.$homework->id,$homework->deliver_deadline,['id'=>'sub-title','class'=>'sub-text'])}}</th>
                                </tr> 
                            @endforeach
                        @endif
                    </table>
                </div> 
                 <div class='col-md-12 col-sm-11'>                    
                    {{Form::label('Coursewares_label','课件编辑:',['class'=>'sub-label'])}}   
                    <table class='table table-bordered table-hover'>
                        <thead>
                            <tr>
                                <th>章节</th>
                                <th>内容</th>
                                <th>课件</th>
                                <th>更新时间</th>
                            </tr>
                        </thead>
                        @if($coursewares)
                            @foreach($coursewares as $courseware)  
                                <tr> 
                                    <td>{{$courseware->id}}</td>
                                    <td>{{Form::text('courseware_label'.$courseware->id,$courseware->label,['id'=>'sub-title','class'=>'sub-text'])}}</td>
                                    <td><a href={{URL::to($courseware->source)}}>ppt</></td>
                                    <th>2015</th>
                                </tr> 
                            @endforeach
                        @endif
                    </table>
                </div>
                
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
    <div class='col-md-12 col-sm-11'>
        
			{{Form::text('content','',['id'=>'sub-content','style'=>'display:none'])}}
    		{{Form::submit('提交',['id'=>'subBt','class'=>'btn btn-success'])}}
		{{Form::close()}}
    </div>
@stop