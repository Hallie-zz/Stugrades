<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=utff-8"/>
<title>登录</title>
</head>
<body>
<?php session_start();
	//if(!isset($_SESSION['username']) header('Location:index.php');
	
	require "db.php";
	$conn = mysql_connect($setting['host'],$setting['username'],$setting['password']);
	$username=$_POST['user_name'];
	$password=$_POST['password'];
	$class=$_POST['class'];
	 if($class==NULl)
	{
		echo "<h1>请选择登陆身份！！<h1>";
		header("Refresh:3;url='index.php'");
		exit;
	}
	
	else if($username==NULL)
	{
		echo "<h1>用户名不能为空！！<h1>";
		header("Refresh:3;url='index.php'");
		exit;
	}
	else if($password==NULL)
		
	{
		echo "<h1>密码不能为空！！<h1>";
		header("Refresh:3;url='index.php'");
		exit;
	}
	
	$re=mysql_select_db($setting['database']);
	mysql_query('SET NAMES UTF8');
	$str=array('student','teacher','admini');
	$str1=array('sname','tname','aname');
	$index=$str1[$class-1];
	
	$sql="select * from ".$str[$class-1]." where ".$index."='".$username."'";
	
	
	$result=mysql_query($sql);
	
	$row=mysql_fetch_assoc($result);
	if($row[$index]==$username)
	{
		
		if($row['password']==$password)
		{
			$_SESSION['user_name']=$username;
			
	
			echo "<h1>登陆成功<h1>";
			if($class==1)
			{
				header("Refresh:3;url='main.php'");
			}
			if($class==2)
			{
				header('Location:teacher.php');
			}
			if($class==3)
			{
				header('Location:admin.php');
			}
		}
		else
		{
			echo "<h1>密码错误！！<h1>";
			header("Refresh:3;url='index.php'");
		}
	}
	else
	{
		echo "<h1>用户名不存在！！<h1>";
		header("Refresh:3;url='index.php'");
	}
	
	?>
	</body>
</html>