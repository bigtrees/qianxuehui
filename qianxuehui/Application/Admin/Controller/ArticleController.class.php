<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
	public function index(){
 		$this->meta_title = '文章首页';
 		$Article = M('article'); // 实例化Article数据表
        $count = $Article->count();
        $show = getpage($count, 4);// 分页显示输出,调用公共函数getpage
        //$orderby['num']='desc';
        $list = $Article->order('num')->limit($show->firstRow, $show->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show->show());// 赋值分页输出
        $this->display(); // 输出模板
    }
 	public function edit(){
 		$this->meta_title = '修改';
        $this->display();
    }
    public function add(){
 		$this->meta_title = '新增';
        $this->display();
    }
    public function checkArticle(){
    	if(isset($_POST['change'])){
			$Model = M('article');
			$info['num']=$_POST['number']; 
			$result = $Model->where($info)->select();

			$info['content']=$_POST['content'];
			$updateArticle = $Model->save($info); 
			if($updateArticle){
				$this->success("修改成功", "edit");
			} 
			else{$this->error("更新数据失败：".mysql_error());} //查询失败后返回上一页
		}
		if(isset($_POST['add'])){
			$Model = M('article');

			$info['num']=$_POST['number']; 
			$info['title']=$_POST['title']; 
			$info['content']=$_POST['content'];
			// 写入数据
			$add = $Model->add($info);
			if($add){
				$this->success("新增文章成功", "edit");
			} 
			else{$this->error("更新数据失败：".mysql_error());}
		}
		if(isset($_POST['toAdd'])){
			$this->redirect("add"); //直接跳转，不带计时后跳转
		}
		if(isset($_POST['back'])){
			$this->redirect("index"); 
		}
    }
}