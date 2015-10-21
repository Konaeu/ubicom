@include('layout.header')

<section id="portfolio" class="content-section clearfix news-edit">
        <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
            <h2 class="section-title left">超级管理员</h2>
            </div>
        <div class="col-md-2 col-sm-3 detail-filter">
            <ul class="col-md-12 col-sm-12 folio-filters">
                <li ><a href={{URL::to('/user-edit')}} >用户管理</a></li>
                <li ><a href={{URL::to('/news-edit')}} >新闻管理</a></li>
                <li ><a href={{URL::to('/research-edit')}} >项目管理</a></li>
                <li ><a href={{URL::to('/notice-edit')}} >通知管理</a></li>
                <li ><a href={{URL::to('/course-edit')}} >课程管理</a></li>
            </ul>
        </div>
        
        <div class=" details-list col-md-10 col-sm-9">
            <h2 class="section-title left">{{$cat_title}}</h2>
 
        	@yield('form-begin')      
        	@section('form-center')
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
			 @show

			<div class='sub-area'>
				@yield('form-end')

			</div>

		</div>
		</div>
</section>
 <script>
 	$(document).ready(function(){
 		$("#subBt").click(function(){//点击提交按钮对结果进行提交，首先 获得editor里的内容，然后将其赋值到表单的input表单中
 			//alert($("#editor").html());
 			$("#sub-content").val(function(i, oriVal){ 				
 				return $("#editor").html();
 			});
 		});

 	});
 </script>
<style>
#editor {overflow:scroll; min-height:300px}
</style>
        <script>
              $(function(){
                function initToolbarBootstrapBindings() {
                  var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 
                        'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                        'Times New Roman', 'Verdana'],
                        fontTarget = $('[title="字体"]').siblings('.dropdown-menu');
                  $.each(fonts, function (idx, fontName) {
                      fontTarget.append($('<li><a data-edit="fontName ' + fontName +'" style="font-family:\''+ fontName +'\'">'+fontName + '</a></li>'));
                  });
                  $('a[title]').tooltip({container:'body'});
                    $('.dropdown-menu input').click(function() {return false;})
                        .change(function () {$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');})
                    .keydown('esc', function () {this.value='';$(this).change();});

                  $('[data-role=magic-overlay]').each(function () { 
                    var overlay = $(this), target = $(overlay.data('target')); 
                    overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
                  });
                  if ("onwebkitspeechchange"  in document.createElement("input")) {
                    var editorOffset = $('#editor').offset();
                    $('#voiceBtn').css('position','absolute').offset({top: editorOffset.top, left: editorOffset.left+$('#editor').innerWidth()-35});
                  } else {
                    $('#voiceBtn').hide();
                  }
                };
                function showErrorAlert (reason, detail) {
                    var msg='';
                    if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
                    else {
                        console.log("error uploading file", reason, detail);
                    }
                    $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
                     '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
                };
                initToolbarBootstrapBindings();  
                $('#editor').wysiwyg({ fileUploadError: showErrorAlert} );
                window.prettyPrint && prettyPrint();
              });
            </script>
 @include('layout.footer')