<?php
/**
 * Created by PhpStorm.
 * User: taylor yue
 * Date: 2017/4/28
 * Time: 16:52
 */

// 文件系统

namespace core\lib\drive\log;
use core\lib\conf;

class file
{
    public $path; // 日志的存储位置
    public function __construct()
    {
        $this-> $path = conf::get('OPTION', 'log');
    }

    public function log($message, $file)
    {
        /**
         *  1.确定文件存储位置是否存在
         *  2.新建目录
         *  3. 写入日志
         */

        if(!is_dir($this->path))
        {
            mkdir($this->path, '0777', true);
        }
        $message .= date('Y-m-d H:i:s');
        return file_put_contents($this->path.$file.'.php', json_encode($message));
    }
}