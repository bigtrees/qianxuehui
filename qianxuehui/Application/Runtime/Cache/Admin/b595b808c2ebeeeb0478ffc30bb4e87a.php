<?php if (!defined('THINK_PATH')) exit();?><html>
<body>
	<h2>导航栏名称修改</h2>
	<a href="index.php">返回</a>
	<form name="form" method="post" action="?act=change">
	<table border="1">
		<tr>
			<td></td>
			<td>logo</td>
			<td>name</td>
			<td>address</td>
		</tr>
		<?php
 $result = mysql_query("SELECT * FROM link where number = '1'"); $link = mysql_fetch_row($result); ?>
		<tr>
			<td>num_01</td>
			<td><img src="../common/images/friend_link/link_01.png"/></td>
			<td><input type="text" class="box" name="name_01" value="<?php echo $link[2];?>"/></td>
			<td><input type="text" class="box" name="address_01" value="<?php echo $link[1];?>"/></td>
		</tr>
		<?php
 $result = mysql_query("SELECT * FROM link where number = '2'"); $link = mysql_fetch_row($result); ?>
		<tr>
			<td>num_02</td>
			<td><img src="../common/images/friend_link/link_02.png"/></td>
			<td><input type="text" class="box" name="name_02" value="<?php echo $link[2];?>"/></td>
			<td><input type="text" class="box" name="address_02" value="<?php echo $link[1];?>"/></td>
		</tr>
		<?php
 $result = mysql_query("SELECT * FROM link where number = '3'"); $link = mysql_fetch_row($result); ?>
		<tr>
			<td>num_03</td>
			<td><img src="../common/images/friend_link/link_03.png"/></td>
			<td><input type="text" class="box" name="name_03" value="<?php echo $link[2];?>"/></td>
			<td><input type="text" class="box" name="address_03" value="<?php echo $link[1];?>"/></td>
		</tr>
		<?php
 $result = mysql_query("SELECT * FROM link where number = '4'"); $link = mysql_fetch_row($result); ?>
		<tr>
			<td>num_04</td>
			<td><img src="../common/images/friend_link/link_04.png"/></td>
			<td><input type="text" class="box" name="name_04" value="<?php echo $link[2];?>"/></td>
			<td><input type="text" class="box" name="address_04" value="<?php echo $link[1];?>"/></td>
		</tr>
		<?php
 $result = mysql_query("SELECT * FROM link where number = '5'"); $link = mysql_fetch_row($result); ?>
		<tr>
			<td>num_05</td>
			<td><img src="../common/images/friend_link/link_05.png"/></td>
			<td><input type="text" class="box" name="name_05" value="<?php echo $link[2];?>"/></td>
			<td><input type="text" class="box" name="address_05" value="<?php echo $link[1];?>"/></td>
		</tr>
		<?php
 $result = mysql_query("SELECT * FROM link where number = '6'"); $link = mysql_fetch_row($result); ?>
		<tr>
			<td>num_06</td>
			<td><img src="../common/images/friend_link/link_06.png"/></td>
			<td><input type="text" class="box" name="name_06" value="<?php echo $link[2];?>"/></td>
			<td><input type="text" class="box" name="address_06" value="<?php echo $link[1];?>"/></td>
		</tr>
		<?php
 $result = mysql_query("SELECT * FROM link where number = '7'"); $link = mysql_fetch_row($result); ?>
		<tr>
			<td>num_07</td>
			<td><img src="../common/images/friend_link/link_07.png"/></td>
			<td><input type="text" class="box" name="name_07" value="<?php echo $link[2];?>"/></td>
			<td><input type="text" class="box" name="address_07" value="<?php echo $link[1];?>"/></td>
		</tr>
		<?php
 $result = mysql_query("SELECT * FROM link where number = '8'"); $link = mysql_fetch_row($result); ?>
		<tr>
			<td>num_08</td>
			<td><img src="../common/images/friend_link/link_08.png"/></td>
			<td><input type="text" class="box" name="name_08" value="<?php echo $link[2];?>"/></td>
			<td><input type="text" class="box" name="address_08" value="<?php echo $link[1];?>"/></td>
		</tr>
		<?php
 $result = mysql_query("SELECT * FROM link where number = '9'"); $link = mysql_fetch_row($result); ?>
		<tr>
			<td>num_09</td>
			<td><img src="../common/images/friend_link/link_09.png"/></td>
			<td><input type="text" class="box" name="name_09" value="<?php echo $link[2];?>"/></td>
			<td><input type="text" class="box" name="address_09" value="<?php echo $link[1];?>"/></td>
		</tr>
		<?php
 $result = mysql_query("SELECT * FROM link where number = '10'"); $link = mysql_fetch_row($result); ?>
		<tr>
			<td>num_10</td>
			<td><img src="../common/images/friend_link/link_10.png"/></td>
			<td><input type="text" class="box" name="name_10" value="<?php echo $link[2];?>"/></td>
			<td><input type="text" class="box" name="address_10" value="<?php echo $link[1];?>"/></td>
		</tr>
	</table>
	<br>
	<input type="submit" name="change" value="确认修改">
	</hr>
	<br><br><br>
	</form>			
</body>
<!-- END BODY -->
</html>