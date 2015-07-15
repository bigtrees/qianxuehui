<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller{
	public function add(){
		$user = D("users");
		$user->create();
		$result = $user->add();
		if($result){
			$this->redirect("index");
			$this->success('注册成功！');
		}
		else{
			$this->redirect("register");
			$this->error($user->getError());
		}
	}
	public function register(){
		echo "register";
		$this->display();
	}
	public function login(){
		$this->display();
	}
	public function checklogin(){
		$username = $_POST['id'];
		$passwd = $_POST['passwd'];
		$user = M("users");
		$userinfo = $user->where("username ='$username'")->find();
		if(!empty($userinfo)){
			if($userinfo['passwd'] == $passwd){
				Cookie::set('userid',$userinfo['id'],time()+3600*24);
				Cookie::set('username',$username,time()+3600*24);
				Cookie::set('lastlogintime',time(),time()+3600*24);
				$this->redirect("index");
				$this->success('登陆成功！');
			}else{
				$this->redirect("login");
				$this->error('密码出错，请重新输入！');
			}
		}else{
			$this->redirect("login");
			$this->error('用户名不存在！');
		}
	}
	public function logout(){
		Cookie::delete('username');
		Cookie::delete('lastlogintime');
		$this->assign("jumpUrl","__APP__/index/index");
		$this->success('您已经成功退出，欢迎您的下次登录！');
	}
}