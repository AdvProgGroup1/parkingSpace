

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
       <h1 align="center">
Fasilkom Parking Service
</h1>

<h3 align="center">
<form class='login' id='login' action='securitytest.jsp' method='post' accept-charset='UTF-8' >

<input type='hidden' name='submitted' id='submitted' value='1'/>
 
<label for='username' >Username:<br/></label>
<input type='text' name='username' id='username'  maxlength="20"/><br/><br/>

 
<label for='password' >Password:<br/></label>
<input type='password' name='password' id='password' maxlength="20"/><br/><br/>


<br/><br/><input type='submit' name='Submit' value='Login' class="styled-button-9"/>
 
</form> 
    
  <a href="index.jsp">Login as Member</a>

<%					
					if(null != session.getAttribute("wrong"))
						{			 
						out.println(session.getAttribute("wrong"));
						session.setAttribute("wrong", " ");
						}
%>
 
</h3>

</p>
    </body>
</html>
