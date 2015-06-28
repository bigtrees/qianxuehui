<?php

	/*echo '<pre>';
	print_r($_GET);
	$control = isset($_GET['m']) ? $_GET['m'] : 'Index';
	$action = isset($_GET['a']) ? $_GET['a'] : 'index';

	$obj = new $control();
	$obj->$action();

	class Index {
		function index(){
			echo "string";
		}
		function handle(){
			echo "this is Index handle";
		}
	}*/

	define('APP_NAME', 'Index');//项目名称
	define('APP_PATH', './Index/'); //项目路径
	define('APP_DEBAG', TRUE); //开启调试模式
	//define('RUNTIME_PATH', APP_PATH .'./Temp/'); //定义编译目录
	require './ThinkPHP/ThinkPHP.php'; //引入运行文件
?>