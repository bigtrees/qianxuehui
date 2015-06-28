<?php
header("Content-Type: text/html;charset=utf-8");
return array(
	//'配置项'=>'配置值'
	
	// 数据库设置 
	'DB_TYPE' => 'mysql', // 数据库类型
	'DB_HOST' => 'localhost', // 服务器地址
	'DB_USER' => 'root', // 数据库服务器用户名
	'DB_PWD' => '', // 数据库服务器用户名密码
	'DB_NAME' => 'mydb', // 数据库服务器数据库名
	'DB_PORT' => '3306', // 端口
	'DB_PREFIX' => '', // 数据库表前缀

	//设置访问权限
	'MODULE_ALLOW_LIST'    =>    array('Home','Admin','User'),
	'DEFAULT_MODULE'       =>    'Home',
	
	'URL_ROUTER_ON'   => true, //开启路由
	'URL_ROUTE_RULES' => array( //定义路由规则  
		//尽量把规则复杂的规则定义放到前面，确保最复杂的规则可以优先匹配到。但是如果路由规则定义多了之后，仍然很容易混淆，所以需要寻找更好的解决办法。   
		'new/:year\d/:month\d$'  => 'News/archive',
		'new/:id\d$'    => 'News/read',    
		'new/:name$'    => 'News/read',    
		
		/*'/^new\/(\d+)$/'        => 'News/read?id=:1',    
		'/^new\/(\w+)$/'        => 'News/read?name=:1',    
		'/^new\/(\d{4})\/(\d{2})$/' => 'News/achive?year=:1&month=:2',*/
		
	),

	'URL_PARAMS_BIND'       =>  true, // URL变量绑定到操作方法作为参数
	'URL_PARAMS_BIND_TYPE'  =>  1, // 设置参数绑定按照变量顺序绑定 函数带参数

	// 多个伪静态后缀设置 用|分割
	'URL_HTML_SUFFIX' => 'html|shtml|xml' 
	//'URL_DENY_SUFFIX' => 'pdf|ico|png|gif|jpg', // URL禁止访问的后缀设置

	//'URL_CASE_INSENSITIVE' =>true, //配置好后，即使是在Linux环境下面，也可以实现URL访问不再区分大小写了。
	//
	//默认错误跳转对应的模板文件
	//'TMPL_ACTION_ERROR' => 'Public:error';
	//默认成功跳转对应的模板文件
	//'TMPL_ACTION_SUCCESS' => 'Public:success';
);