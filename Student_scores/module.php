<html>
	<head>
	<meta http-equiv="Content-type" content="html/text;charset=utf-8"/>
	<link rel="styleSheet" href="module.css" type="text/css">
	<script></script>
	<title>成绩管理系统</title>
	<script>
	function changetab(n)
	{
		for(i=1;i<=document.getElementsByTagName("li").length;i++)
		{
			document.getElementsByTagId('info'+i).style.display='none';	
		}
	}
	</script>
	</head>
	<body>
	<header>
	<img src="header.jpg" width="1000" height="100"><br/>
	<em><h1>学生成绩管理系统<h1></em>
	</header>
	<nav>
	
	<ul id="tab">
		<li><a id="tab1" class="cur" onmouseover="changetab(1)" href="#">课程信息</a></li>
		<li><a id="tab2" onmouseover="changetab(2)" href="#">考试信息</a></li>
	</ul>
	<br/><br/>
	<div id="info1">
	<a href="">公告栏</a><br/>
	<a href="">最新消息</a><br/>
	<a href="">课程安排</a><br/>
	</div>
	<div id="info2">
	<a href="">公告栏</a><br/>
	<a href="">考试时间</a><br/>
	<a href="">信息查询系统入口</a><br/>
	</div>
	</nav>
	<footer>
	
	</footer>
	</body>
</html>