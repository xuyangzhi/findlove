<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>英语四六级成绩统计系统</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<?php
if (isset($_POST['login']))
{
    $class = trim($_POST['class']);
    $snumber = trim($_POST['snumber']);
    $name = trim($_POST['name']);
    $jibie = $_POST['jibie'];
    $score =trim($_POST['score']);
    $conn = mysql_connect("URL","USERNAME", "PASSWORD");
    mysql_set_charset('utf8', $conn);
    mysql_select_db("DBNAME");//连接mysql数据库
    if(!empty($class)&&!empty($snumber)&&!empty($name)&&!empty($jibie)&&!empty($score)&&!empty($conn))
    {
        $query_cetinsert = "insert into cet VALUES ('$class','$snumber','$name','$jibie','$score')";
        $result = mysql_query($query_cetinsert);
        echo("<script type='text/javascript'>alert('提交成功');window.open('cetscoreinsert.php','_self');</script>");
    }
else
    {
        echo("<script type='text/javascript'>alert('请仔细检查，并按照要求输入所有信息！');window.history.back();</script>");
    }
}
?>
</body>
</html>