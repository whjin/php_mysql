<?php
/**
 * Created by PhpStorm.
 * User: whjin
 * Date: 2018/12/11
 * Time: 0:52
 */
$con = mysqli_connect('localhost', 'root', 'caozhigy359', 'info');
mysqli_query($con, 'set names utf8');
if ($con) {
    echo '连接数据库成功';
} else {
    echo '连接数据库失败';
}
/*echo '<br/>';
$sql = mysqli_query($con, "insert into fruit_shop(name,num,price) values('荔枝',8,10)");
if ($sql) {
    echo '插入数据成功';
} else {
    echo '插入数据失败';
}*/
echo '<br/>';
$query = mysqli_query($con, 'select * from fruit_shop');
echo mysqli_num_rows($query);