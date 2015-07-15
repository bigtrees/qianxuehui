<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>   
    <!-- START HEAD -->
    <head>
		<!--导入文本编辑器-->
		<link rel="stylesheet" href="/thinkphp/qianxuehui/Public/editor/themes/default/default.css" />
		<script charset="utf-8" src="/thinkphp/qianxuehui/Public/editor/kindeditor-min.js"></script>
		<script charset="utf-8" src="/thinkphp/qianxuehui/Public/editor/lang/zh_CN.js"></script>
		<script>
			var editor;
			KindEditor.ready(function(K) {
				editor = K.create('textarea[name="content"]', {
					allowFileManager : true
				});
			});
		</script>
    </head>
    <!-- END HEAD -->
    	
    <!-- START BODY -->
    <body>
		<!--介绍块-->
		<div id="introduce">				
			<!--介绍文-->
			<div class="content">
				<?php  $Model = M('article'); $num = $_GET['num']; $condition['num'] = $num; $result = $Model->where($condition)->find(); ?>
				<div class="cont">
				<form name="form" method="post" action="<?php echo U('article/checkArticle');?>">
					<br>
					序号：<input type="text" class="box" name="number" value="<?php echo $result['num'];?>"/><br>
					标题：<input type="text" class="box" name="title" value="<?php echo $result['title'];?>"/><br>
					内容：<br>
					<textarea id="editor_id" name="content" style="width:80%;height:500px;"><?php echo $result['content'];?></textarea><br>
					<input type="submit" name="change" value="修改">
					<input type="submit" name="toAdd" value="新增">	
					<input type="submit" name="back" value="返回">			
				</form>
				</div>
			</div>
		</div> 
		<!--end intro-->		
    </body>
    <!-- END BODY -->
</html>