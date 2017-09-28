<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=utff-8"/>
<title>学生信息管理</title>
</head>
<body>
<?php SESSION_START();
if(isset($_SESSION['user_name']))
{
	echo "<p>欢迎你 ,".$_SESSION['user_name']."</p>";
}
else
{
	echo "<script>alert('未登录不能查看信息');window.location='index.php'</script>";
}
?>
<form action="student.php" method="POST">
成绩管理:<br/>
学院：<input type="text" name="collage"><br/>
专业：<input type="text" name="major"><br/>
班级：<input type="text" name="class"><br/>
	  <input type="submit" value="查询"/>
</form>
<?php
	require "db.php";
	$conn = mysql_connect($setting['host'],$setting['username'],$setting['password']);
?>

</body>
</html>