<?php
/**
 * Created by PhpStorm.
 * User: taylor yue
 * Date: 2017/4/28
 * Time: 16:53
 */

namespace core\lib;

class log
{
    static $class;
    /**
     * 1.确定日志存储方式
     *
     * 2.写日志
     *
     */

    static public function init()
    {

        //确定存储方式
        $drive = conf::get('DRIVE', 'log');
        $class = '\core\lib\drive\log\\'.$drive;
        self::$class = new $class;
    }

    static public function log($name)
    {
        self::$class->log($name);
    }
}