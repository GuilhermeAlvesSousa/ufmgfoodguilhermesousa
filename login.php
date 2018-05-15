<?php
session_start();
?>
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
    <td align="center" valign="middle" id="posicaoImagem"><a href="index.html"><img src="images/logo_03.png" width="300" border="0"/></a></td>
  </tr>
  <tr>
    <td height="60" align="center" valign="middle">
    
    <input type="text" placeholder=" E-MAIL" id="email" style=" width:300px; height:40px;"/>
    
    </td>
  </tr>
  <tr>
    <td  height="60" align="center" valign="middle"><input type="password" placeholder=" SENHA"  style=" width:300px; height:40px;" id="senha"/></td>
  </tr>
  <tr>
    <td  height="39" align="center" valign="middle"><a href="#" onclick="gravaDados();"><img src="images/btn_entrar.png" width="200" border="0"/></a></td>
  </tr>
  <tr>
    <td align="center" valign="middle">&nbsp;</td>
  </tr>
</table>

                       



    

    


					
                      	
</body>
</html>
<script>
	// FUNÇÃO JAVASCRIPT
	function gravaDados()
	{
		
		// TROCO A LOGO PELO GIF LOADING.
		document.getElementById("posicaoImagem").innerHTML = '<img src="images/loading.gif" width="100"/>';
		
		// CRIO AS VARIAVEIS E CHAMO OS VALORES DAS CAIXAS DE INPUTS HTML
		var email = document.getElementById("email").value;
		var senha = document.getElementById("senha").value;
		
		
		
		// OBRIGO O USUÁRIO A PREENCHER OS CAMPOS DOS INPUTS
		if(email == "")
		{
			alert("Favor informar o seu e-mail!");
			document.getElementById("posicaoImagem").innerHTML = '<a href="index.html"><img src="images/logo_03.png" width="300" border="0"/></a>';
			document.getElementById("email").focus();
			return false();
		}
		
	
		// OBRIGO O USUÁRIO A PREENCHER OS CAMPOS DOS INPUTS
		if(senha == "")
		{
			alert("Favor informar o seu curso!");
			document.getElementById("posicaoImagem").innerHTML = '<a href="index.html"><img src="images/logo_03.png" width="300" border="0"/></a>';
			document.getElementById("senha").focus();
			return false();
		}
		
		
		// CRIO UMA VARIAVEL COM PARAMENTROS QUE SERÁ ENVIADO PARA O PHP, QUE FARÁ A GRAVAÇÃO NO BANCO DE DADOS
		var idcliente = 0;
		var parametros = {
			"email":email,
			"senha":senha
			};
			
			
			// ENVIO OS PARAMENTROS PARA A PÁGINA QUE SUBMETE AO CADASTRO
			$.post('controller/Login.php',
				parametros,
				function(data)
				{
					
					if(data == "ok")
					{
						location.href = "principal.php";
					}
					else
					{
						alert("Dados não conferem!");
						document.getElementById("posicaoImagem").innerHTML = '<a href="index.html"><img src="images/logo_03.png" width="300" border="0"/></a>';
					}
					
				}
			);
		
		
	}
</script>
