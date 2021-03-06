@extends('layout.edit')

@section('form-begin')
    	{{Form::open(['url'=>'/edit','enctype'=>'multipart/form-data'])}}
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
                {{Form::label('course_name_label','课程名:',['class'=>'sub-label'])}}   
                {{Form::text('course_name',$course_name,['id'=>'sub-title','class'=>'sub-text'])}}
                {{Form::label('course_info_label','课程信息:',['class'=>'sub-label'])}}  
                {{Form::textarea('course_info',$course_info,['id'=>'sub-abstract','class'=>'sub-text'])}}
                </div>
                <div class='col-md-6 col-sm-6'>
                {{Form::label('teacher_address_label','老师地址:',['class'=>'sub-label'])}}   
                {{Form::text('teacher_address',$teacher_address,['id'=>'sub-title','class'=>'sub-text'])}}
                {{Form::label('teacher_mail_label','老师邮箱:',['class'=>'sub-label'])}}
                {{Form::text('teacher_mail',$teacher_mail,['id'=>'sub-title','class'=>'sub-text'])}}
                </div>
                <div class='col-md-6 col-sm-6'>
                {{Form::label('TA_name_label','助教姓名:',['class'=>'sub-label'])}}   
                {{Form::text('TA_name',$TA_name,['id'=>'sub-title','class'=>'sub-text'])}}
                {{Form::label('TA_address_label','助教地址:',['class'=>'sub-label'])}}   
                {{Form::text('TA_address',$TA_address,['id'=>'sub-title','class'=>'sub-text'])}}
                {{Form::label('TA_mail_label','助教邮箱:',['class'=>'sub-label'])}}
                {{Form::text('TA_mail',$TA_mail,['id'=>'sub-title','class'=>'sub-text'])}}
                </div>

                <div class='col-md-12 col-sm-11'>
                    {{Form::label('Course_notice_label','通知编辑:',['class'=>'sub-label'])}} 
                    <div id='course_notice_add_click',class="btn" style='padding:12px 20px 12px 20px;background-color:blue;color:white'>发布新通知 </div>
                    {{Form::text('course_notice_add_count',0,['id'=>'course_notice_add_count','style'=>'display:none'])}}
                    <table class='table table-bordered table-hover' id='course_notice_show'>
                        <thead>
                            <th>#</th>
                            <th>通知内容</th>
                            <th>通知时间</th>
                            <th>删除</th>
                        </thead>
                        @if($course_notices)
                            <div style='display:none'>{{$count=0}}</div> 
                            @foreach($course_notices as $notice)
                                <tr>
                                    <td>{{++$count}}</td>
                                    <td>{{Form::text('course_notice_content'.$notice->id,$notice->comment,['class'=>'sub-text'])}}</td>
                                    <td>{{$notice->created_at}}</td>
                                    <td><div class="course_notice_delete_btn btn"  style='padding:12px 20px 12px 20px;background-color:#e04d47;color:white'>删除</div></a>{{Form::text('course_notice_delete'.$notice->id,'0',['class'=>'deleteOrNot','style'=>'display:none'])}}</td>
                            @endforeach
                        @endif
                    </table>
                </div>

                 <div class='col-md-12 col-sm-11'>                    
                    {{Form::label('Homeworks_label','作业编辑:',['class'=>'sub-label'])}} 
                    <div id='homework_add_click',class="btn" style='padding:12px 20px 12px 20px;background-color:blue;color:white'>发布新作业 </div>
                    {{Form::text('homework_add_count',0,['id'=>'homework_add_count','style'=>'display:none'])}}
                     
                    <table class='table table-bordered table-hover' id='homeworks_show'>
                        <thead>
                            <tr>
                                <th>章节</th>
                                <th>内容</th>
                                <th>提交截至时间</th>
                                <th>发放时间</th>
                                <th>删除</th>
                            </tr>
                        </thead>
                        @if($homeworks)  
                        <div style='display:none'>{{$count=0}}</div>                          
                            @foreach($homeworks as $homework)                              
                                <tr> 
                                        <td>{{++$count}}</td>
                                        <td>{{Form::text('homework_label'.$homework->id,$homework->homework_item,['class'=>'sub-text'])}}</td>
                                        <td>{{Form::text('homework_submit_time'.$homework->id,$homework->deliver_deadline,['class'=>'sub-text'])}}</td>
                                        <td>{{Form::text('homework_deliver_time'.$homework->id,$homework->deliver_deadline,['class'=>'sub-text'])}}</td>
                                        <td><div class="homework_delete_btn btn"  style='padding:12px 20px 12px 20px;background-color:#e04d47;color:white'>删除</div></a>{{Form::text('homework_delete'.$homework->id,'0',['class'=>'deleteOrNot','style'=>'display:none'])}}</td>                     
                                </tr> 
                            @endforeach
                        @endif
                        <!--发布新的新闻-->
                    </table>
                </div> 
                
                 <div class='col-md-12 col-sm-11'>                    
                    {{Form::label('Coursewares_label','课件编辑:',['class'=>'sub-label'])}}  
                    <div id='courseware_add_click',class="btn" style='padding:12px 20px 12px 20px;background-color:blue;color:white'>发布新课件 </div>                    
                    {{Form::text('courseware_add_count',0,['id'=>'courseware_add_count','style'=>'display:none'])}}
                    <table class='table table-bordered table-hover' id='coursewares-show'>
                        <thead>
                            <tr>
                                <th>章节</th>
                                <th>内容</th>
                                <th>课件</th>
                                <th>更换课件</th>
                                <th>更新时间</th>
                            </tr>
                        </thead>
                        @if($coursewares) 
                            <div style='display:none'>{{$count=0}}</div>                           
                            @foreach($coursewares as $courseware)     
                                <tr> 
                                    <td>{{++$count}}</td>
                                    <td>{{Form::text('courseware_label'.$courseware->id,$courseware->label,['id'=>'sub-title','class'=>'sub-text'])}}</td>
                                    @if($courseware->source=='')
                                        <td>等待上传</></td>
                                    @else
                                        <td><a href={{URL::to($courseware->source)}}>{{basename($courseware->source)}}</></td>
                                    @endif
                                    <td><input name={{'courseware_ppt'.$courseware->id}} type="file"></td>
                                    <td>2015</td>
                                </tr> 
                            @endforeach
                        @endif
                    </table>
                </div>
                @if(0)   
                    {{Form::open(['url'=>'upload_file','enctype'=>'multipart/form-data'])}}
                        {{Form::file('file')}}
                        {{Form::text('label_id',$courseware->id)}}
                        {{Form::submit('提交',['class'=>'btn btn-success'])}}
                    {{Form::close()}}  
                @endif
            @endif	
 <script>
    $(document).ready(function(){         
        $('#homework_add_click').click(function(){ //增加新的作业项
            var $v1=Number($('#homework_add_count').val())+1;
            $('#homework_add_count').val($v1);
            var $item='homework_add_item'+$v1;   
            var $submit_time='homework_add_submit_time'+$v1; 
            var $deliver_time='homework_add_deliver_time'+$v1;
            var $add_or_not='homework_add_or_not'+$v1;
            $('#homeworks_show').append($('<tr><td>'+$v1+'</td> <td><input class="sub-text" name='+$item+' type="text" value=""></td>  <td><input class="sub-text" name='+$submit_time+' type="text" value=""></td> <td><input class="sub-text" name='+$deliver_time+' type="text" value=""></td> <td><div class="homework_delete_btn btn" style="padding:12px 20px 12px 20px;background-color:#e04d47;color:white;">删除</div><input class=" deleteOrNot" name='+$add_or_not+' type="text" value="0" style="display:none">  </td>  </tr>'));                 
        });
        $('#courseware_add_click').click(function(){ //增加新的k课件信息
            var $v1=Number($('#courseware_add_count').val())+1;
            $('#courseware_add_count').val($v1);
            var $label='courseware_add_label'+$v1;   
            var $file_source='courseware_add_source'+$v1; 
            var $deliver_time='courseware_add_deliver_time'+$v1;
            $('#coursewares-show').append('<tr><td>'+$v1+'</td> <td><input class="sub-text" name='+$label+' type="text" value=""></td> <td>等待上传</td> <td><input name='+$file_source+' type="file"></td> <td>2015</td>   </tr>');                 
        });
        $('#course_notice_add_click').click(function(){//增加新的notice
            var $v1=Number($('#course_notice_add_count').val())+1;
            $('#course_notice_add_count').val($v1);
            var $content='course_notice_add_content'+$v1;
            var $add_or_not='course_notice_add_or_not'+$v1;
            $('#course_notice_show').append($('<tr><td>'+$v1+'</td> <td><input class="sub-text" name='+$content+' type="text" value=""></td> <td>添加中</td><td><div class="homework_delete_btn btn" style="padding:12px 20px 12px 20px;background-color:#e04d47;color:white;">删除</div><input class=" deleteOrNot" name='+$add_or_not+' type="text" value="0" style="display:none">  </td></tr>'));
        });

        $('body').on('click','.homework_delete_btn',function(){
            if($(this).html()=='删除'){  
                $(this).html('该条删除').css('background-color','blue');         
                $(this).parent('td').children('.deleteOrNot').val(1);  
            }else{
                $(this).html('删除').css('background-color','#e04d47');
                $(this).parent('td').children('.deleteOrNot').val(0);
            }
        });
        $('body').on('click','.course_notice_delete_btn',function(){
            if($(this).html()=='删除'){  
                $(this).html('该条删除').css('background-color','blue');         
                $(this).parent('td').children('.deleteOrNot').val(1);  
            }else{
                $(this).html('删除').css('background-color','#e04d47');
                $(this).parent('td').children('.deleteOrNot').val(0);
            }
        });
    });
 </script>

 
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