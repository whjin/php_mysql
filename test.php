<?php
/**
 * Created by PhpStorm.
 * User: whjin
 * Date: 2018/12/10
 * Time: 13:51
 */
$con = mysqli_connect('localhost', 'root', 'caozhigy359', 'info');
mysqli_set_charset($con, "utf8");
if ($con) {
    echo '连接数据库成功';
} else {
    echo '连接数据库失败';
}
echo '<br>';
$insert = mysqli_query($con, "INSERT INTO test(name) VALUES ('毛泽东')");
var_dump($insert);
if ($insert) {
    echo '插入数据成功';
} else {
    echo '插入数据失败';
}
echo '<br>';
$res = mysqli_query($con, "SELECT * FROM test");
$row = mysqli_fetch_all($res);
var_dump($row);
echo '<br>';
mysqli_close($con);
echo '数据库已经关闭';

