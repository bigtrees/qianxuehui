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

	define('APP_NAME', 'Index');//��Ŀ����
	define('APP_PATH', './Index/'); //��Ŀ·��
	define('APP_DEBAG', TRUE); //��������ģʽ
	//define('RUNTIME_PATH', APP_PATH .'./Temp/'); //�������Ŀ¼
	require './ThinkPHP/ThinkPHP.php'; //���������ļ�
?>