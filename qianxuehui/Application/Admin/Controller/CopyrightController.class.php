<?php
namespace Admin\Controller;
use Think\Controller;
class CopyrightController extends Controller {
    public function index(){
    	$this->meta_title = '管理首页';
        $this->display();
    }
    public function navi(){
    	echo "string";
    }
}