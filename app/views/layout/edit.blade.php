 @include('layout.header')
<style>
#editor {overflow:scroll; min-height:300px}
</style>
<section id="portfolio" class="content-section clearfix">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2 class="section-title left">新闻编辑</h2>
            </div>
        </div>
        <div class="row col-md-12 col-sm-12 ">
			<div class="btn-toolbar" data-role="editor-toolbar" data-target="#editor">
		      <div class="btn-group">
		        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="icon-font"></i><b class="caret"></b></a>
		          <ul class="dropdown-menu">
		          </ul>
		        </div>
		      <div class="btn-group">
		        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
		          <ul class="dropdown-menu">
		          <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
		          <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
		          <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
		          </ul>
		      </div>
		      <div class="btn-group">
		        <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
		        <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
		        <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="icon-strikethrough"></i></a>
		        <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
		      </div>
		      <div class="btn-group">
		        <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="icon-list-ul"></i></a>
		        <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="icon-list-ol"></i></a>
		        <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="icon-indent-left"></i></a>
		        <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="icon-indent-right"></i></a>
		      </div>
		      <div class="btn-group">
		        <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>
		        <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>
		        <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>
		        <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a>
		      </div>
		      <div class="btn-group">
				  <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="icon-link"></i></a>
				    <div class="dropdown-menu input-append">
					    <input class="span2" placeholder="URL" type="text" data-edit="createLink"/>
					    <button class="btn" type="button">Add</button>
		        </div>
		        <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="icon-cut"></i></a>

		      </div>
		      
		      <div class="btn-group">
		        <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="icon-picture"></i></a>
		        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
		      </div>
		      <div class="btn-group">
		        <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a>
		        <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>
		      </div>
		      <input type="text" data-edit="inserttext" id="voiceBtn" x-webkit-speech="">

		    </div>
		    <div id="editor">

		    </div>
		    @section('content')
		    	{{Form::open(['url'=>'/edit'])}} 		    		
		    		{{Form::text('title','',['id'=>'subTitle','style'=>'display:none'])}}
		    		{{Form::text('content','',['id'=>'subContent','style'=>'display:none'])}}
		    		{{Form::submit('确认',['id'=>'subBt','class'=>'btn btn-success'])}}
				{{Form::close()}}
		    @show
		</div>
</section>
 <script>
 	$(document).ready(function(){
 		$("#subBt").click(function(){//点击提交按钮对结果进行提交，首先 获得editor里的内容，然后将其赋值到表单的input表单中
 			alert($("#editor").html());
 			$("#subContent").val(function(i, oriVal){ 				
 				return $("#editor").html();
 			});
 			$("#subTitle").val(function(i, oriVal){
 				return "hello world";
 			});

 		});

 	});
 </script>

 @include('layout.footer')