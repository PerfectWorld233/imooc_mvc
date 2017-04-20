<?php
/**
 * Created by PhpStorm.
 * User: taylor yue
 * Date: 2017/4/16
 * Time: 22:18
 */
namespace app\ctrl;
class indexCtrl extends \core\imooc
{
    public function index()
    {
        p('it is index  controller !!!!');
       /* $temp =  \core\lib\conf::get('CTRL', 'route');
        print_r($temp);die;
        $data = 'Hello World';
        $title = '视图文件';
        $this->assign('title', $title);
        $this->assign('data', $data);
        $this->assign('index.html');*/
    }
}