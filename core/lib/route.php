<?php
/**
 * Created by PhpStorm.
 * User: taylor yue
 * Date: 2017/4/20
 * Time: 21:22
 */

namespace core\lib;
class route
{
    public function __construct()
    {
        /**
         *  ×××.com/index.php/index/index
         *  1.隐藏index.php
         *  2.获取 URL 参数部分
         *  3.返回对应控制器和方法
         */
//        p('core\lib    route is ok!!!');

        p($_SERVER);
        if(isset($_SERVER['REQUEST_URL']) && $_SERVER['REQUEST_URL'] != '/')
        {
            $path = $_SERVER['REQUEST_URL'];
            $patharr = explode('/', trim($path, '/'));
            if(isset($patharr[0])){
                $this->ctrl = $patharr[0];
            }
            unset($patharr[0]);
            if(isset($patharr[1])){
                $this->action = $patharr[1];
            } else{
                $this->action = 'index';
            }
            /**
             *  url 多余部分转换为 get 参数
             *  index/index/id / 1/ str
             */

            $count = count($patharr) + 2;
            $i = 2;
            while($i < $count){
                if(isset($patharr[$i + 1])){
                    $_GET[$patharr[$i]] = $patharr[$i + 1];
                }

                $i = $i + 2;
            }
            p($_GET);
            p($patharr);

        }else{
            $this->ctrl = 'index';
            $this->action = 'index';
        }


    }
}