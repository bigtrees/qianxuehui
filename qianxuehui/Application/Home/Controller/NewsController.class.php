<?php
namespace Home\Controller;
use Think\Controller;

class NewsController extends Controller {
    public function index(){
    	echo "hello world";
    	print_r( C('MODULE_ALLOW_LIST'));
    	echo C('DEFAULT_MODULE');
        echo C('DB_NAME');
    }
    public function _empty($name){        //把所有城市的操作解析到city方法        
        $this->city($name);    
    }    //注意 city方法 本身是 protected 方法    
    protected function city($name){        //和$name这个城市相关的处理         
        echo '当前城市' . $name;    
    }
    public function _before_read(){
        echo 'before<br/>';
    }
    public function read($name='s'){   
        echo I('get.name',0); // 如果不存在$_GET['id'] 则返回0
        /*if($result){    //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']    
            $this->success('新增成功', 'User/list');
        } 
        else {    //错误页面的默认跳转页面是返回前一页，通常不需要设置 
            //success和error方法的第一个参数表示提示信息，第二个参数表示跳转地址，第三个参数是跳转时间（单位为秒）   
            $this->error('操作失败');
        }*/
        $data['status']  = 1;
        $data['content'] = 'content';
        print_r($data);
        $this->ajaxReturn($data);
        echo "string";     
    	//$name = $_GET['name'];
        echo $name;
    }
    public function _after_index(){
        echo 'after<br/>';
    }
    public function archive(){    
        echo I('get.year',0); // 如果不存在$_GET['id'] 则返回0
        echo I('year');
        $year = $_GET['year'];
        $month = $_GET['month'];
        echo 'year='.$year.'&month='.$month;  
    }
}