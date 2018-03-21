<?php
require_once 'Database.php';
if(isset($_POST['tijiao']))
{
    $a=$_POST['Availability'];
    $b=$_POST['Reliability'];
    $c=$_POST['Performence'];
    $d=$_POST['Scalability'];
    $e=$_POST['Security'];
    $f=$_POST['Datamanagement'];
    $g=$_POST['projectname'];
    $h=$_POST['time'];
    $cloud=new Database();
    $conn=$cloud->dbconnect("URL","USERNAME", "PASSWORD");
    mysql_set_charset('utf8', $conn);
    mysql_select_db("DBNAME");//连接mysql数据库
    $cloud_insert = mysql_query( "insert into cloud VALUES ('$g','$h','$a','$b','$c','$d','$e','$f')");
    if($cloud_insert)
    {
        echo("<script type='text/javascript'>alert('提交成功');</script>");
    }
    else
    {
        echo("<script type='text/javascript'>alert('提交失败');</script>");
    }
}