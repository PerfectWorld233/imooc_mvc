<?php
/**
 * 入口文件
 * Created by PhpStorm.
 * User: taylor yue
 * Date: 2017/4/16
 * Time: 22:04
 */
/**
 *
 * 入口文件
1.定义常量
2.加载函数库
3.启动框架
 **/
// 定义当前框架所在的根目录
define('IMOOC', __DIR__);
// 定义框架核心文件所在的目录
define('CORE', IMOOC.'/core');
// 项目文件所在目录
define('APP', IMOOC.'/app');


define('MODULE', 'app');
define('DEBUG', true);
include "vendor/autoload.php";

if(DEBUG){
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    ini_set('display_error', 'On');
} else{
    ini_set('display_error', 'Off');
}

// 加载函数库
include CORE.'/common/function.php';
// 加载框架核心文件
include CORE.'/imooc.php';


include CORE.'/lib/route.php';
// 注册自动加载
// （当我们new一个不存在的类的时候会触发\core\Imooc::load）
spl_autoload_register('\core\imooc::load');

\core\imooc::run();