@extends('layout.admin')
@section('admin-content')
<div class='item-content'>   
        <h2 class='item-title'>项目管理</h2> 
        
		<table class='table table-bordered table-hover'>
		    <thead>
		        <tr>
		            <th>ID</th>
		            <th>项目名称</th>
		            <th>开始时间</th>		            
		            <th>结束时间</th>
		            <th>操作</th>
		        </tr>
		    </thead>
		    {{Form::open(['url'=>'/research-edit'])}}
		    {{Form::text('deleteId','',['id'=>'deleteId','style'=>'display:none'])}}
		    @foreach($researches as $research)  
		        <tr> 
		            <td>{{$research->id}}</td>
		            <td><a href={{URL::to('/edit',[1,$research->id])}}>{{$research->title}}</td>
		            <td>{{$research->begin_time}}</td>
		            <td>{{$research->end_time}}</td>
		        	<th><a href={{URL::to('/edit',[1,$research->id])}}><div class="btn" style='padding:12px 20px 12px 20px;background-color:blue;color:white'>编辑</div></a> {{Form::submit('删除',['id'=>$research->id,'class'=>'btn btn-item-delete'])}}</th>
		        </tr> 
		    @endforeach
		    {{Form::close()}}
		</table>
    </div><!--item-info-->
    <?php echo $researches->links(); ?> 

 <script> //删除用户操作
 	$(document).ready(function(){
 		$(".btn-item-delete").click(function(){//点击提交按钮对结果进行提交，首先 获得editor里的内容，然后将其赋值到表单的input表单中
 			$('#deleteId').val($(this).attr('id'));
 		});
 	});
 </script>

@stop