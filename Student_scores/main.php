
<html>
	<head>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<meta http-equiv="Content-type" content="html/text;charset=utf-8"/>
	<link rel="styleSheet" href="mian.css" type="text/css">
	<script>
	function changetab(n)
	{
		for(i=1;i<=3;i++)
		{
			document.getElementById('info'+i).style.display='none';
			document.getElementById('tab'+i).className="";
		}
		document.getElementById('info'+n).style.display='block';
			document.getElementById('tab'+n).className="cur";
	}
	</script>
	<title>学生信息管理</title>
	<body>
	<?php SESSION_START();
	if(isset($_SESSION['user_name']))
	{
	}
	else
	{
	echo "<script>alert('未登录不能查看信息');window.location='index.php'</script>";
	}
	?>
	<div id="container">
		<div id="header">
			<div id="logo" class="bgcolor"></div>
			<div id="banner">
				<div id="left" class="bgcolor">
				<h1>华中农业大学学生成绩在线管理系统<h1>
				</div>
				<div id="right" class="bgcolor">欢迎你,<?php echo $_SESSION['user_name']?><br>
				现在是<?php  echo date("Y年m月d日 H:i:s");?></div>
			</div>
		</div>
		<div class="nav"></div>
		<div id="menu" class="bgcolor">
		<marquee behavior="scroll" contenteditable="true" width="100%" onstart="this.firstChild.innerHTML+=this.firstChild.innerHTML;" scrollamount="3" width="100" onmouseover="this.stop();" onmouseout="this.start();"> 
		欢迎登陆在线成绩管理系统，请在页面左边选择查看公告或者登陆成绩管理系统
		</marquee> 
		</div>
		<div class="nav"></div>
		<div id="content">
		<div id="left">
		<div >   <div class="lbox"><p><a onmouseover="changetab(1)" id="tab1" class="cur" href="">成绩查询</a></p></div></div>
			<div class="nav"></div>
		<div >	<div class="lbox"><p><a onmouseover="changetab(2)" id="tab2" class="#"  href="">个人信息查询</a></p></div></div>
			<div class="nav"></div>
		<div >	<div class="lbox"><p><a  onmouseover="changetab(3)" id="tab3"  class="#"  href="">导出成绩单</a></p></div></div>
		</div>
		<div class="main">
		<div id="info1">
		<!--<form action="" method="POST">
		选择学年:<select name="year">
		 <option value="1">第一学年</option>
		 <option value="2">第二学年</option>
		 <option value="3">第三学年</option>
		 <option value="4">第四学年</option>
		 </select>
		 <input type="hidden" value=1 name="id"/>
		 <input type="submit" value="查询"/>
		</form>
		<form action="" method="POST">
		选择科目:<select name="course">
		 <option value="1">微积分</option>
		 <option value="2">概率论</option>
		 <option value="3">大学数学</option>
		 <option value="4">大学英语</option>
		 </select>
		 <input type="hidden" value=2 name="id"/>
		 <input type="submit" value="查询"/>
		</form>-->
		<?php 
		
		$dir=dirname(__FILE__);
		require $dir."/db.php";
		$db=new db($setting);
		$sname=$_SESSION['user_name'];
		$sql="select * from student where sname='".$sname."'";
		$data=$db->getData($sql);
		$sql="select * from stu_course where sno='".$data[0]['sno']."'";
		$result=mysql_query($sql);
		$data=$db->getData($sql);
		echo "<table align=center border='1px solid' cellspcaing='50%'width='600px'>";
		echo "<tr><td>课程名</td><td>成绩</td><td>选修时间</td></tr>";
		foreach($data as $value)
		{
			
		echo "<tr>";
		echo "<td>{$value['course']}</td>";
		echo "<td>{$value['grade']}</td>";
		echo "<td>第{$value['syear']}学期</td>";
		echo "</tr>";
		}
		echo "</table>";
		?>
		</div>
		<div id="info2">
		<h2>个人信息管理</h2>
		<?php
		$sql="select * from student where sname='".$sname."'";
		$data=$db->getData($sql);
		echo "<table align=center border='1px solid' cellspcaing='50%'width='600px'>";
		echo "<tr><td>名字</td><td>班级</td><td>学号</td><td>密码</td></tr>";
		echo "<tr>";
		echo  "<td>{$data[0]['clno']}</td>";
		echo "<td>{$data[0]['sname']}</td>";
		echo "<td>{$data[0]['sno']}</td>";
		echo "<td>{$data[0]['password']}</td>";
		echo "</tr>";
		echo "<br/>";
		?>
		</div>
		<div id="info3">
		<h2>成绩导出</h2>
		<form action="" method="post">
		<input type="hidden" value=3 name="id"/>
		<input type="submit" value="查询"/>
		</form>
		</div>
		</div>
		</div>
		<div class="nav"></div>
		<div id="footer" class="bgcolor">页脚</div>
	</div>
	</body>
</html>