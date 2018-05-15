<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
		<meta name="author" content="www.frebsite.nl" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        	<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<title>UFMGFOOD</title>

</head>

<body>

<table width="100%" border="0" style="float:left; margin-top:20px;">
  <tr>
    <td align="center" valign="middle"><a href="index.html"><img src="images/logo_03.png" width="300" border="0"/></a></td>
  </tr>
  <tr>
    <td height="60" align="center" valign="middle">
    
    <input type="text" placeholder=" E-mail" id="email" style=" width:300px; height:40px;"/>
    
    </td>
  </tr>

  <tr>
    <td  height="39" align="center" valign="middle"><img src="images/btn_enviar.png" width="150" border="0"/></td>
  </tr>
  <tr>
    <td align="center" valign="middle">&nbsp;</td>
  </tr>
</table>

                       



    

    


					
                      	
</body>
</html>
<script>
	function acessar()
	{
		document.getElementById("loading").innerHTML = '<img src="../../images/load.gif"/>';
		var login = document.getElementById("login").value;
		var senha = document.getElementById("senha").value;
		
		if(login == "" || senha == "")
		{
			document.getElementById("loading").innerHTML = 'Favor digitar login e senha!';
		}
		else
		{
			var parametros = {
			"login":login,
			"senha":senha
			};
			
			
			
			$.post('cod_php/cod_login.php',
				parametros,
				function(data)
				{
					var res = $.trim(data);
					if(res == "ok")
					{
						location.href="index.php";
					}
					else
					{
						document.getElementById("loading").innerHTML = data;
					}
					
					
				}
			);
			
			
			
		}
		
		
	}
</script>
