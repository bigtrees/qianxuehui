<?php
header("Content-Type: text/html;charset=utf-8");

class IndexAction extends Action {
    public function index(){
    	echo 'hello world';
    	/*mysql_query("SET NAMES utf8");
    	$link=mysql_connect("localhost","root","");   
		if(!$link) echo "没有连接成功!yyyyy";   
		else echo "连接成功!00000000";   */
		require 'Index/Conf/config.php';
		//echo C('APP_STATUS');
		echo C('DB_USER');
    	$db = M('user');
    	$result = $db->select();
    	dump($result);
    }

    public function add(){
    	echo "add";
    }
}