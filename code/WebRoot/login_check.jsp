<%@ page language="java" contentType ="text/html;charset=utf-8" pageEncoding="utf-8" import="java.sql.*"%>
<%
String path = request.getContextPath();
String basePath = request.getScheme()+"://"+request.getServerName()+":"+request.getServerPort()+path+"/";
%>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <base href="<%=basePath%>">
    
    <title>My JSP 'login_check.jsp' starting page</title>
    
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
  <%
  String Usr=request.getParameter("usrname");//得到登陆用户名
  String Pwd=request.getParameter("passwd");//得到登录密码
  
 // String driver = "com.mysql.jdbc.Driver";
  Connection conn = null;
  String url ="jdbc:mysql://localhost:3306/class1403";
  //加载JDBC驱动
  try{
  Class.forName("com.mysql.jdbc.Driver");
  //Class.forName(driver);
  conn=DriverManager.getConnection(url,"root","");
  }catch(Exception e)
  {}
  
  Statement stmt;
  String sql="select username,password from login_register where username='"+Usr+"' and password='"+Pwd+"' ";
  //创建Statement实例，并执行sql语句
  stmt=conn.createStatement();
  //stmt.setString(1,Usr);
  //stmt.setString(1,Pwd);
  ResultSet rs=stmt.executeQuery(sql);
  if(rs.next())//判断数据库是否存在此用户
  {
  	//if(Pwd.equals(rs.getString("password")))
  	//{
  		//String lastIP=request.getRemoteAddr();
  		//java.text.SimpleDateFormat sdf =new java.text.SimpleDateFormat("yyyy/MM/dd hh:mm:ss");
  		//java.util.Date now=new java.util.Date();
  		//session.setAttribute()
  		response.sendRedirect("login.jsp");
  	//}
  	}
  	else
  		out.println( "<script>alert('用户名或密码不正确！');history.go(-1);</script>"); 
  	rs.close();
  	conn.close();	
   %>
  </body>
</html>
