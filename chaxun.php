<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
<title>生活驿站——学生信息查询系统</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<?php
include("header.html");
?>
<?php
	if(isset($_POST['login']))
	{
		$snumber=$_POST['snumber'];
		$password=$_POST['password'];
		$conn = mysql_connect("URL","USERNAME", "PASSWORD");
		mysql_set_charset('utf8', $conn);
		mysql_select_db("DBNAME");//连接mysql数据库
		$query_snumber="select * from information where snumber=$snumber";
		$result=mysql_query($query_snumber);
		$result=mysql_fetch_array($result);
		if(!empty($result['snumber']))
		{
		if($result['password']==$password)
		{
			$final="select * from information where snumber=$snumber";
			$query=mysql_query($final);
			$finalresult=mysql_fetch_array($query);
		}
		else
		{
			echo("<script type='text/javascript'>alert('密码错误，请重新输入');window.history.back();</script>");
			
		}
		}
		else
		{
			echo("<script type='text/javascript'>alert('请输入正确的学号');window.open('studentlogin.php','_self');</script>");
		}
	}
	?>
	<div class="container" style="text-align: center">
	<h2 class="h4" style="text-align: center;margin-top: 20%;font-family: 'annie-use-your-telescope';font-weight: bold">
	<?php echo($finalresult['name']);echo('的个人信息')
		?>
	</h2>
<table class="table table-bordered table-hover" style="width:100%;text-align: center; ">
	<thead style="text-align: center">
		<tr><th >学号</th><th>姓名</th><th>学校</th><th>班级</th><th>户籍</th></tr>
	</thead>
	<tbody>
		<tr>
        <td><?php
			echo($finalresult['snumber']);
			?></td>
        <td><?php
			echo($finalresult['name']);
			?></td>
        <td><?php
			echo($finalresult['school']);
			?></td>
        <td><?php
			echo($finalresult['class']);
			?></td>
			<td><?php
			echo($finalresult['address']);
			?></td>
    </tr>
	</tbody>
</table>
	</div>
	<?php
	include("footer.html");
	?>
</body>
</html>