<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>   
    <!-- START HEAD -->
    <head>
    </head>
    <!-- END HEAD -->
    
    <?php  if(isset($_GET['act']) && $_GET['act']=='change'){ $result = M('copyrightinfo'); $table = $result->select(); $info = $table[0]; $info[address_1] = $_POST['address_1']; $info[address_2] = $_POST['address_2']; $info[zip_1] = $_POST['zip_1']; $info[zip_2] = $_POST['zip_2']; $info[cellphone] = $_POST['cellphone']; $result->where('id=1')->save($info); } ?>

    <!-- START BODY -->
    <body>
		<h2>学会信息修改</h2>
		<a href="index.php">返回</a>
		
		<table border="1">
			<tr>
				<td>中文地址</td><td>英文地址</td><td>邮编</td><td>邮编</td><td>电话</td>
			</tr>
			
			<tr>
			<form name="form" method="post" action="?act=change">
			<?php
 $result = M('copyrightinfo'); $table = $result->where('id=1')->select(); $info = $table[0]; ?>
				<td><input type="text" class="box" name="address_1" value="<?php echo $info[address_1];?>"/></td>
				<td><input type="text" class="box" name="address_2" value="<?php echo $info[address_2];?>"/></td>
				<td><input type="text" class="box" name="zip_1" value="<?php echo $info[zip_1];?>"/></td>
				<td><input type="text" class="box" name="zip_2" value="<?php echo $info[zip_2];?>"/></td>
				<td><input type="text" class="box" name="cellphone" value="<?php echo $info[cellphone];?>"/></td>
				<input type="submit" name="change" value="确认修改">
			</form>			
			</tr>
		</table>
		<br>	
    </body>
    <!-- END BODY -->
</html>