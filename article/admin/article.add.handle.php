<?php
require_once '../connect.php';
print_r($_POST);
/*if (!(isset($_POST['title']) && (!empty($_POST['title'])))) {
    echo "<script>
            alert('文章标题不能为空');
            window.location.href='article.add.php';</script>";
}
$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$content = $_POST['content'];
$dateline = time();
$insertSql = "insert into article(title,author,description,content,dateline) VALUES ('$title','$author','$description','$content',$dateline)";
$sql = mysqli_query($insertSql);
if ($sql) {
    echo '插入数据成功';
} else {
    echo '插入数据失败';
}*/
