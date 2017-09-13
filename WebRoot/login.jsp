<%@ page language="java" import="java.util.*" pageEncoding="utf-8"%>
<%
String path = request.getContextPath();
String basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";
%>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <base href="<%=basePath%>">
    
    <title>登录</title>
    
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<meta http-equiv="description" content="This is my page">
	<!--
	<link rel="stylesheet" type="text/css" href="styles.css">
	-->

  </head>
  <body>
  	<div id="logindiv">
  		<form id="loginform" method="post" action="login_check.jsp">
  			<table width="500" border="0" align="center" >
  				<tr>
  					<td>用户名：</td>
  					<td><input type="text" name="usrname" /></td>
  				</tr>
  				<tr>
  					<td>密 码：</td>
  					<td><input type="password" name="passwd" /></td>
  				</tr>
  				<tr>
  					<td>&nbsp;</td>
  					<td><input type="submit" name="login" value="登录" /></td>
  				</tr>
  			</table>
  		</form>
  	</div>
  </body>
</html>
