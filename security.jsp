

<%@page contentType="text/html" pageEncoding="UTF-8"%> 
<%@page import="java.util.*"%> 
<%@page import="java.io.*"%> 
<%@page import="java.lang.*"%> 
<%@page import="java.net.*"%> 

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
         <% if(null == session.getAttribute("username"))
		{response.sendRedirect("index.jsp"); }
	%>
    </head>
    <body>
      <h1 align="center">
Fasilkom Parking Service
</h1>

<center>
<form action="logout.jsp">
<% out.print("Welcome, " + session.getAttribute("username"));
	out.println("! ");
%>
    <input type="submit" value="Logout" class="styled-button-9">
</form>




<h3 align="center">
<form class='login' id='login' action='check.jsp' method='post' accept-charset='UTF-8' >

<input type='hidden' name='submitted' id='submitted' value='1'/>
 
<label for='name' >Name:<br/></label>
<input type='text' name='name' id='name'  maxlength="20"/><br/><br/>

<br/><br/><input type='submit' name='Check' value='Check' class="styled-button-9"/>
 
</form> 

<%					
					if(null != session.getAttribute("wrong"))
						{			 
						out.println(session.getAttribute("wrong"));
						session.setAttribute("wrong", " ");
						}
%>
 
</h3>
</center>

  
    </body>
</html>
