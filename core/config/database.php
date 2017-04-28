<?php
/**
 * Created by PhpStorm.
 * User: taylor yue
 * Date: 2017/4/28
 * Time: 16:09
 */

$database = new medoo([
    // 必须配置项
    'database_type' => 'mysql',
    'database_name' => 'mvc',
    'server' => 'localhost',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',

]);