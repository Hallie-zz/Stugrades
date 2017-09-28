<html>
	<head>
	<meta http-equiv="Content-type" content="text/html;charset=utff-8"/>
	<title>华中农业大学学生成绩管理系统</title>
	<link rel="styleSheet" href="index.css" type="text/css">
	</head>
	<body>
	<div id="main">
	<center>
	<table width="350"  style="border-color">
	<h1 align="center">华中农业大学学生成绩管理系统</h1>
	<form action="login.php" method="post" ><h3>
	用户名：<input type="text" id="username" name="user_name"/><br/>
	密　码：<input type="password" id="password" name="password" style=""/><br/>
	</h3>
	学生<input type="radio" name="class" value=1  >
	教师<input type="radio" name="class" value=2  >
	管理员<input type="radio" name="class" value=3 ><br/>
	</p>
	<div id="submit">
	<input type="submit" value="登陆"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;               
	<input type="reset" value="重置"/><br/>
	</div>
	</form>
	</center>
	</table>
	</div>
	</body>
</html>