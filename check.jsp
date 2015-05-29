
<%@page contentType="text/html" pageEncoding="UTF-8"  import="java.io.*, java.net.*"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
       <% 
        String fileName = "/WEB-INF/memberlist.txt";
        InputStream ins = application.getResourceAsStream(fileName);
        String name=request.getParameter("name"); 
	
        try
        {
        
	if(ins == null)
	{
		response.setStatus(response.SC_NOT_FOUND);
	}
	else
	{
		BufferedReader br = new BufferedReader((new InputStreamReader(ins)));
		String data;
                
		while((data= br.readLine())!= null)
		{
                   
                    if (data.equals(name))
                    {
                       out.print("This is a member");
                    }
                    else
                    {
                        out.print ("This is not a member");
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
