 @include('layout.header')
<style>
#editor {overflow:scroll; min-height:300px}
</style>
<section id="portfolio" class="content-section clearfix news-edit">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2 class="section-title left">新闻编辑</h2>
            </div>
        </div>
        <div class=" row col-md-12">
        @section('content')
		    	{{Form::open(['url'=>'/edit'])}}
		    		{{Form::label('title','标题:',['class'=>'sub-label'])}} 
		    		{{Form::textarea('title','',['id'=>'sub-title','class'=>'sub-text'])}}
		    		{{Form::label('abstract','摘要:',['class'=>'sub-label'])}} 
		    		{{Form::textarea('abstract','',['id'=>'sub-abstract','class'=>'sub-text'])}}		

        </div>

        <div class="row col-md-12 col-sm-12 ">
        	<div class="col-md-12 sub-label">
        		内容编辑：
        	</div>
			<div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
		      <div class="btn-group">
		        <a class="btn dropdown-toggle" data-toggle="dropdown" title="字体"><i class="icon-font"></i><b class="caret"></b></a>
		          <ul class="dropdown-menu">
		          </ul>
		        </div>
		      <div class="btn-group">
		        <a class="btn dropdown-toggle" data-toggle="dropdown" title="字体大小"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
		          <ul class="dropdown-menu">
		          <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
		          <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
		          <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
		          </ul>
		      </div>
		      <div class="btn-group">
		        <a class="btn" data-edit="bold" title="加粗 (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
		        <a class="btn" data-edit="italic" title="斜体 (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
		        <a class="btn" data-edit="underline" title="下划线 (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
		      </div>
		      <div class="btn-group">
		        <a class="btn" data-edit="insertunorderedlist" title="圆点列表"><i class="icon-list-ul"></i></a>
		        <a class="btn" data-edit="insertorderedlist" title="数字列表"><i class="icon-list-ol"></i></a>
		        <a class="btn" data-edit="outdent" title="向左缩进 (Shift+Tab)"><i class="icon-indent-left"></i></a>
		        <a class="btn" data-edit="indent" title="向右缩进 (Tab)"><i class="icon-indent-right"></i></a>
		      </div>
		      <div class="btn-group">
		        <a class="btn" data-edit="justifyleft" title="左对齐 (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>
		        <a class="btn" data-edit="justifycenter" title="居中 (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>
		        <a class="btn" data-edit="justifyright" title="右对齐 (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>
		        <a class="btn" data-edit="justifyfull" title="自适应 (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a>
		      </div>
		      <div class="btn-group">
				  <a class="btn dropdown-toggle" data-toggle="dropdown" title="超链接(以http开头的全地址)"><i class="icon-link"></i></a>
				    <div class="dropdown-menu input-append">
					    <input class="span2" placeholder="URL" type="text" data-edit="createLink"/>
					    <button class="btn" type="button">Add</button>
		        </div>
		      </div>
		      
		      <div class="btn-group">
		        <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="icon-picture"></i></a>
		        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
		      </div>
		      <div class="btn-group">
		        <a class="btn" data-edit="undo" title="撤销 (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a>
		        <a class="btn" data-edit="redo" title="重做 (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>
		      </div>
		      <input type="text" data-edit="inserttext" id="voiceBtn" x-webkit-speech="">

		    </div>
		    <div id="editor">

		    </div>	    
		</div>
		<div class='row col-md-12 col-sm-12 sub-area'>
				{{Form::text('content','',['id'=>'sub-content','style'=>'display:none'])}}
	    		{{Form::submit('确认',['id'=>'subBt','class'=>'btn btn-success'])}}
			{{Form::close()}}
	    @show
		</div>
</section>
 <script>
 	$(document).ready(function(){
 		$("#subBt").click(function(){//点击提交按钮对结果进行提交，首先 获得editor里的内容，然后将其赋值到表单的input表单中
 			//alert($("#editor").html());
 			$("#sub-content").val(function(i, oriVal){ 				
 				return $("#editor").html();
 			});
 			/* 
 			$("#sub-title").val(function(i, oriVal){
 				return "hello world";
 			});
			*/
 		});

 	});
 </script>

 @include('layout.footer')