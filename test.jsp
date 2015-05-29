

<%@page contentType="text/html" pageEncoding="UTF-8"
        import="java.io.*, java.net.*"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    </head>
    <body>
      <% 
            String fileName = "/WEB-INF/memberlist.txt";
            InputStream ins = application.getResourceAsStream(fileName);
            String username=request.getParameter("username"); 
	    String password=request.getParameter("password"); 
			//	if( username.equals("group1") && password.equals("12345") ) 
		//			{ session.setAttribute("username",username); 
			//		response.sendRedirect("member.jsp"); } 
			//	else if((username.equals("security"))&&(password.equals("secure")))
		//			{ session.setAttribute("username",username); 
		//			response.sendRedirect("security.jsp"); } 
		//		else 
			//		{session.setAttribute("wrong", "Incorrect Username or Password");
			//		response.sendRedirect("index.jsp"); }
   
    try
    {
     
         
	if(ins == null)
	{
		response.setStatus(response.SC_NOT_FOUND);
	}
	else
	{
		BufferedReader br = new BufferedReader((new InputStreamReader(ins)));
		String userID;
                
            
                
		while((userID= br.readLine())!= null)
		{
                   
                    if (userID.equals(username))
                    {
                        if (br.readLine().equals(password))
                       {
                        {session.setAttribute("username",username); 
					response.sendRedirect("member.jsp"); }
                       }
                    }
                    
		}
	}	
}
catch(IOException e)
{
out.println(e.getMessage());
}
		%> 
    </body>
</html>
