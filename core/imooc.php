<?php
/**
 * Created by PhpStorm.
 * User: taylor yue
 * Date: 2017/4/16
 * Time: 22:10
 */

class imooc
{
    public static $classMap = array();
    public $assign;

    static public function run()
    {
        $route = new \core\lib\route();
        $ctrlClass = $route->ctrl;
        $action = $route->action;
        $ctrlfile = APP.'/ctrl'.$ctrlClass.'ctrl.php';
        $ctrlClass = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
        if(is_file($ctrlfile)){
            include $ctrlfile;
            $ctrl = new $ctrlClass();
            $ctrl->$action();
        }
    }

    static public function load($class)
    {
        // 自动加载类库
        // new \core\Route()
        // $class = '\core\Route'
        // IMOOC.'/core/route.php'
        if(isset($classMap[$class])){
            return true;
        }else{
            $class = str_replace('\\', '/', $class);
            $file = IMOOC.'/'.$class.'.php';
            if (is_file($file)) {
                include $file;
                self::$classMap[$class] = $class;
            }else{
                return false;
            }
        }

    }
    public function assign($name, $value){
        $this->assign[$name] = $value;
    }
    public function display($file){
        $file = APP.'/views'.$file;
        if(is_file($file)){
            extract($this->assign);
            include $file;
        }
    }
}