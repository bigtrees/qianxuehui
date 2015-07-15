<?php
/**
 * TODO 基础分页的相同代码封装，使前台的代码更少
 * @param $count 要分页的总记录数
 * @param int $pagesize 每页查询条数
 * @return \Think\Page
 */
function getpage($count, $pagesize = 10) {
    $p = new Think\Page($count, $pagesize);
    $p->setConfig('header', '<li class="rows"><br>&nbsp;共<b>%TOTAL_ROW%</b>条&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
    $p->setConfig('prev', '上一页');
    $p->setConfig('next', '下一页');
    $p->setConfig('last', '末页');
    $p->setConfig('first', '首页');
    $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
    $p->lastSuffix = true;//最后一页不显示为总页数
    return $p;
}
public function del_cache() { 
 header("Content-type: text/html; charset=utf-8");
  //清文件缓存
  $dirs = array('./Runtime/');
  @mkdir('Runtime',0777,true);
  //清理缓存
  foreach($dirs as $value) {
   $this->rmdirr($value);
  }
  $this->assign("jumpUrl","__ROOT__/");
  $this->success('系统缓存清除成功！');
  //echo '<div style="color:red;">系统缓存清除成功！</div>';   
 } 
 
/////////////下面是处理方法
    
 public function rmdirr($dirname) {
  if (!file_exists($dirname)) {
   return false;
  }
  if (is_file($dirname) || is_link($dirname)) {
   return unlink($dirname);
  }
  $dir = dir($dirname);
  if($dir){
   while (false !== $entry = $dir->read()) {
    if ($entry == '.' || $entry == '..') {
     continue;
    }
    //递归
    $this->rmdirr($dirname . DIRECTORY_SEPARATOR . $entry);
   }
  }
  $dir->close();
  return rmdir($dirname);
 }
?>