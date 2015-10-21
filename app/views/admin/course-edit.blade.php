@extends('layout.admin')
@section('admin-content')
<div class='item-content'>   
        <h2 class='section-title '>
        	 课程管理 
        	<a href={{URL::to('/edit',[3,null])}}><div class="btn right " style='padding:12px 20px 12px 20px;background-color:blue;color:white'>创建新课程</div></a> 
        </h2> 

        
		<table class='table table-bordered table-hover'>
		    <thead>
		        <tr>
		            <th>ID</th>
		            <th>课程名</th>
		            <th>授课老师</th>		            
		            <th>助教</th>
		            <th>助教邮箱</th>
		            <th>操作</th>
		        </tr>
		    </thead>
		    {{Form::open(['url'=>'/course-edit'])}}
		    {{Form::text('deleteId','',['id'=>'deleteId','style'=>'display:none'])}}
		    @foreach($courses as $course)  
		        <tr> 
		            <td>{{$course->id}}</td>
		            <td><a href={{URL::to('/course',[$course->id])}}>{{$course->course_name}}</a></td>
		            <td>{{$course->teacher_name}}</td>
		            <td>{{$course->TA_name}}</td>
		            <td>{{$course->TA_mail}}</td>
		        	<th><a href={{URL::to('/edit',[3,$course->id])}}><div class="btn" style='padding:12px 20px 12px 20px;background-color:blue;color:white'>编辑</div></a> {{Form::submit('删除',['id'=>$course->id,'class'=>'btn btn-item-delete'])}}</th>
		        </tr> 
		    @endforeach
		    {{Form::close()}}
		</table>
    </div><!--item-info-->
    <?php echo $courses->links(); ?> 

 <script> //删除用户操作
 	$(document).ready(function(){
 		$(".btn-item-delete").click(function(){//点击提交按钮对结果进行提交，首先 获得editor里的内容，然后将其赋值到表单的input表单中
 			$('#deleteId').val($(this).attr('id'));
 		});
 	});
 </script>

@stop