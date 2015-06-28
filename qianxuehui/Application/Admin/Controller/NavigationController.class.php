<?php
namespace Admin\Controller;
use Think\Controller;
class NavigationController extends Controller {
    public function index(){
    	echo "-------";
    	echo C('DB_NAME');
    	//实例化空模型
    	//$Model = new Model();//或者使用M快捷方法是等效的
    	$Model = M('copyrightinfo');
    	//进行原生的SQL查询
    	$Model->query('SELECT * FROM copyrightInfo');
    	//$info = M('copyrightInfo')
    	//$info->select();
    	$this->meta_title = '管理首页';
        $this->display();
    }
    public function navi(){
    	echo "string";
    }
}