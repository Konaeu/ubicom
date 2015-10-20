@extends('layout.admin')
@section('admin-content')
<div class='item-content'>   
        <h2 class='item-title'>新闻管理</h2> 
        
		<table class='table table-bordered table-hover'>
		    <thead>
		        <tr>
		            <th>ID</th>
		            <th>作者</th>
		            <th>标题</th>		            
		            <th>创建时间</th>
		            <th>操作</th>
		        </tr>
		    </thead>
		    {{Form::open(['url'=>'/news-edit'])}}
		    {{Form::text('deleteId','',['id'=>'deleteId','style'=>'display:none'])}}
		    @foreach($news as $new)  
		        <tr> 
		            <td>{{$new->id}}</td>
		            <td>{{$new->user_id}}</td>
		            <td><a href={{URL::to('/edit',[0,$new->id])}}>{{$new->title}}</a></td>
		            <td>2015</td>
		        	<th><a href={{URL::to('/edit',[0,$new->id])}}><div class="btn" style='padding:12px 20px 12px 20px;background-color:blue;color:white'>编辑</div></a> {{Form::submit('删除',['id'=>$new->id,'class'=>'btn btn-item-delete'])}}</th>
		        </tr> 
		    @endforeach
		    {{Form::close()}}
		</table>
    </div><!--item-info-->
    <?php echo $news->links(); ?> 

 <script> //删除用户操作
 	$(document).ready(function(){
 		$(".btn-item-delete").click(function(){//点击提交按钮对结果进行提交，首先 获得editor里的内容，然后将其赋值到表单的input表单中
 			$('#deleteId').val($(this).attr('id'));
 		});
 	});
 </script>

@stop