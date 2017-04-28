<?php
/**
 * Created by PhpStorm.
 * User: taylor yue
 * Date: 2017/4/16
 * Time: 22:21
 */

namespace core\lib;
use core\lib\conf;

class model extends \medoo
{
    public function __construct()
    {
        $option = conf::all('database');
        parent::__construct($option);
    }
}