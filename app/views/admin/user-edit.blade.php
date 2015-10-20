@extends('layout.admin')
@section('admin-content')
<div class='item-content'>   
        <h2 class='item-title'>用户管理</h2> 
        
		<table class='table table-bordered table-hover'>
		    <thead>
		        <tr>
		            <th>ID</th>
		            <th>姓名</th>
		            <th>邮箱</th>
		            <th>密码</th>		            
		            <th>创建时间</th>
		            <th>操作</th>
		        </tr>
		    </thead>
		    {{Form::open(['url'=>'/user-edit'])}}
		    {{Form::text('deleteId','',['id'=>'deleteId','style'=>'display:none'])}}
		    @foreach($users as $user)  
		        <tr> 
		            <td>{{$user->id}}</td>
		            <td>{{$user->username}}</td>
		            <td>{{$user->email}}</td>
		            <th>{{$user->password}}</th>
		            <th>{{$user->created_at}}</th>
		        	<th>{{Form::submit('删除',['id'=>$user->id,'class'=>'btn btn-user-delete'])}}</th>
		        </tr> 
		    @endforeach
		    {{Form::close()}}
		</table>
    </div><!--item-info-->
    <?php echo $users->links(); ?> 

 <script> //删除用户操作
 	$(document).ready(function(){
 		$(".btn-user-delete").click(function(){//点击提交按钮对结果进行提交，首先 获得editor里的内容，然后将其赋值到表单的input表单中
 			$('#deleteId').val($(this).attr('id'));
 		});
 	});
 </script>

@stop