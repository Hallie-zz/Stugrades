<?php session_start();
$sname="康宇";
		$sql="select * from student where snme='".$sname."'";
		$result1=mysql_query($sql);
		while(($row=mysql_fetch_assoc($result1))!=false)
			{
				$res1[]=$row;
			}
		$sql="select * from stu_course where sno='".$res1['sno']."'";
		$result=mysql_query($sql);
		while(($row=mysql_fetch_assoc($result))!=false)
			{
				$res[]=$row;
			}
			var_dump($res);
		}
?>