<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	echo "hello world";
    	print_r( C('MODULE_ALLOW_LIST'));
    	echo C('DEFAULT_MODULE');
    	echo C('DB_NAME');

    	$User = M('article');
    	if(isset($_GET['id'])) {            // 根据id查询结果            
    		$data = $New->find($_GET['id']);        
    	}
    	elseif(isset($_GET['title'])){            // 根据name查询结果   
    		echo "ddd";         
    		$data = $New->getByName($_GET['title']);        
    	}        
    	print_r($data);        
    }
}