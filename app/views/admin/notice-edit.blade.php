@extends('layout.admin')
@section('admin-content')
<div class='item-content'>   
        <h2 class='section-title left'>通知管理
        	<a href={{URL::to('/edit',[2,null])}}><div class="btn" style='padding:12px 20px 12px 20px;background-color:blue;color:white'>创建通知</div></a>
        </h2> 
        
		<table class='table table-bordered table-hover'>
		    <thead>
		        <tr>
		            <th>ID</th>
		            <th>通知标题</th>
		            <th>通知时间</th>		            
		            <th>操作</th>
		        </tr>
		    </thead>
		    {{Form::open(['url'=>'/notice-edit'])}}
		    {{Form::text('deleteId','',['id'=>'deleteId','style'=>'display:none'])}}
		    @foreach($notices as $notice)  
		        <tr> 
		            <td>{{$notice->id}}</td>
		            <td><a href={{URL::to('/notice-detail',[$notice->id])}}>{{$notice->title}}</td>
		            <td>2015</td>
		        	<th><a href={{URL::to('/edit',[2,$notice->id])}}><div class="btn" style='padding:12px 20px 12px 20px;background-color:blue;color:white'>编辑</div></a> {{Form::submit('删除',['id'=>$notice->id,'class'=>'btn btn-item-delete'])}}</th>
		        </tr> 
		    @endforeach
		    {{Form::close()}}
		</table>
    </div><!--item-info-->
    <?php echo $notices->links(); ?> 

 <script> //删除用户操作
 	$(document).ready(function(){
 		$(".btn-item-delete").click(function(){//点击提交按钮对结果进行提交，首先 获得editor里的内容，然后将其赋值到表单的input表单中
 			$('#deleteId').val($(this).attr('id'));
 		});
 	});
 </script>

@stop