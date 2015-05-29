

<%@page contentType="text/html" pageEncoding="UTF-8" import="java.net.*"%>
<%@page import="java.util.*"%> 
<%@page import="java.io.*"%> 
<%@page import="java.lang.*"%> 
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
    <h1 align="center">Fasilkom Parking Service</h1>

<center>
<form action="logout.jsp">
<% out.print("Welcome, " + session.getAttribute("username"));
	out.println("! ");
%>
    <input type="submit" value="Logout" class="styled-button-9">
</form>
</center>

    </body>
</html>
