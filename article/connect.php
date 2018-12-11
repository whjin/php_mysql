<?php
/**
 * Created by PhpStorm.
 * User: whjin
 * Date: 2018/12/11
 * Time: 2:10
 */
//MYSQL连接初始化程序
require_once 'config.php';
$con = mysqli_connect(HOST, USERNAME, PASSWORD, 'info');
mysqli_query($con, 'set names utf8');
if ($con) {
    echo '连接数据库成功';
} else {
    echo '连接数据库失败';
}