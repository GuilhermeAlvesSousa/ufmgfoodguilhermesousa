<?php
session_start();

if($_SESSION["idcliente"] == 0 || $_SESSION["idcliente"] == ""){
  
  header("location: index.html");
}


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
    <td align="center" valign="middle" style="font-family:Verdana, Geneva, sans-serif; font-size:18px; color:#FFF;"><img src="images/logo_03.png" width="300"/></td>
  </tr>
  <tr>
    <td height="80" align="center" valign="middle"><a href="cadastroVendedor.php"><img src="images/btn_produtos.png" width="200" border="0"/></a></td>
  </tr>

  <tr>
    <td height="80" align="center" valign="middle"><a href="#" onclick="sair();"><img  src="images/btn_sair.png" width="200" border="0"/></a></td>
  </tr>
  <tr>
    <td  height="80" align="center" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="middle">&nbsp;</td>
  </tr>
</table>

    

    


          
                        
</body>
</html>
<script>

  function sair()
  {
    
    var p = window.confirm("Deseja mesmo sair ?");

    if(p == true)
    {
      location.href="login.php";
    }
  }

</script>