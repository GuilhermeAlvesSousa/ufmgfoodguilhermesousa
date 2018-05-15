<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
		<meta name="author" content="www.frebsite.nl" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        	<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
            <script type="text/javascript" src="js/funcoesJs.js"></script>
<title>UFMGFOOD</title>

</head>

<body>

<table width="100%" border="0" style="float:left; margin-top:20px;">
  <tr>
    <td align="center" valign="middle" id="posicaoImagem"><a href="index.html">
    <img src="images/logo_03.png" width="150" border="0"/></a></td>
  </tr>
  <tr>
    <td height="60" align="center" valign="middle">
    
    <input type="text" placeholder=" NOME" id="nome"  style=" width:300px; height:40px;"/>
    
    </td>
  </tr>
  <tr>
    <td  height="60" align="center" valign="middle"><input type="text" placeholder=" E-MAIL"  style=" width:300px; height:40px;" id="email"/></td>
  </tr>
  
  <tr>
    <td  height="60" align="center" valign="middle"><input onkeypress="formataTelefone(this.value,this.id);" type="text" placeholder=" TELEFONE"  style=" width:300px; height:40px;" id="fone"/></td>
  </tr>
  
  

  
  <tr>
    <td  height="60" align="center" valign="middle">
    
    <select style=" width:300px; height:40px;" id="tipoUsuario">
    	<option value=""> TIPO DE USUÁRIO</option>
        <option value="comprador"> COMPRADOR</option>
        <option value="vendedor"> VENDEDOR</option>
    </select>
    
    </td>
  </tr>
  
    <tr>
    <td  height="60" align="center" valign="middle"><input type="password" placeholder=" SENHA"  style=" width:300px; height:40px;" id="senha"/></td>
  </tr>
  
  <tr>
    <td  height="39" align="center" valign="middle"><a href="#" onclick="gravaDados();"><img src="images/btn_cadastrar.png" width="150" border="0"/></a></td>
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
		document.getElementById("posicaoImagem").innerHTML = '<img src="images/loading.gif" width="80"/>';
		
		// CRIO AS VARIAVEIS E CHAMO OS VALORES DAS CAIXAS DE INPUTS HTML
		var nome = document.getElementById("nome").value;
		var email = document.getElementById("email").value;
		var fone = document.getElementById("fone").value;
		var senha = document.getElementById("senha").value;
		var tipoUsuario = document.getElementById("tipoUsuario").value;
		
		
		// OBRIGO O USUÁRIO A PREENCHER OS CAMPOS DOS INPUTS
		if(nome == "")
		{
			alert("Favor informar o seu nome!");
			document.getElementById("posicaoImagem").innerHTML = '<a href="index.html"><img src="images/logo_03.png" width="150" border="0"/></a>';
			document.getElementById("nome").focus();
			return false();
		}
		// OBRIGO O USUÁRIO A PREENCHER OS CAMPOS DOS INPUTS
		if(email == "")
		{
			alert("Favor informar o seu e-mail!");
			document.getElementById("posicaoImagem").innerHTML = '<a href="index.html"><img src="images/logo_03.png" width="150" border="0"/></a>';
			document.getElementById("email").focus();
			return false();
		}
		// OBRIGO O USUÁRIO A PREENCHER OS CAMPOS DOS INPUTS
		if(fone == "")
		{
			alert("Favor informar o seu telefone!");
			document.getElementById("posicaoImagem").innerHTML = '<a href="index.html"><img src="images/logo_03.png" width="150" border="0"/></a>';
			document.getElementById("fone").focus();
			return false();
		}
		
		// OBRIGO O USUÁRIO A PREENCHER OS CAMPOS DOS INPUTS
		if(tipoUsuario == "")
		{
			alert("Favor selecionar o tipo de usuário!");
			document.getElementById("posicaoImagem").innerHTML = '<a href="index.html"><img src="images/logo_03.png" width="150" border="0"/></a>';
			document.getElementById("tipoUsuario").focus();
			return false();
		}
		// OBRIGO O USUÁRIO A PREENCHER OS CAMPOS DOS INPUTS
		if(senha == "")
		{
			alert("Favor informar a senha!");
			document.getElementById("posicaoImagem").innerHTML = '<a href="index.html"><img src="images/logo_03.png" width="150" border="0"/></a>';
			document.getElementById("senha").focus();
			return false();
		}
		
		
		// CRIO UMA VARIAVEL COM PARAMENTROS QUE SERÁ ENVIADO PARA O PHP, QUE FARÁ A GRAVAÇÃO NO BANCO DE DADOS
		var idcliente = 0;
		var parametros = {
			"nome":nome,
			"email":email,
			"fone":fone,
			"senha":senha,
			"tipoUsuario":tipoUsuario,
			"idcliente":idcliente
			};

			
			// ENVIO OS PARAMENTROS PARA A PÁGINA QUE SUBMETE AO CADASTRO
			$.post('controller/Usuario.php',
				parametros,
				function(data)
				{
					alert("Cadastro realizado com sucesso. Você será direcionado para a página de acesso.");
					location.href="login.php";
					
					
				}
			);
		
		
	}
</script>
