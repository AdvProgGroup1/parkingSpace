

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      
    </head>
    <body>
      <% 
				String username=request.getParameter("username"); 
				String password=request.getParameter("password"); 
				if((username.equals("security"))&&(password.equals("secure")))
					{ session.setAttribute("username",username); 
					response.sendRedirect("security.jsp"); } 
				else 
					{session.setAttribute("wrong", "Incorrect Username or Password");
					response.sendRedirect("index.jsp"); }
		%> 
    </body>
</html>
