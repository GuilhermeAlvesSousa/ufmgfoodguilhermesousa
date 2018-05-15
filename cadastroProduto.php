<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
    <meta name="author" content="www.frebsite.nl" />
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
    <link rel="stylesheet" rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/funcoesJs.js"></script>
<title>UFMGFOOD</title>

</head> 

<body>
    <div class="container cadastros_pdr_container">
     <div class="row">
      <div class="col-md-12 form-group">
        <a href="index.html">
        <img src="images/logo_03.png" class="center-block" width="200" border="0"/>
        </a>
      </div>
      <div class="col-md-6 form-group">
        <input type="text" placeholder=" NOME" id="nomeProduto"  class="form-control" />
      </div>
      <div class="col-md-6 form-group">
        <select class="form-control" id="tipoProduto">
          <option value=""> TIPO DE PRODUTO</option>
            <option value="doce"> DOCE</option>
            <option value="salgado"> SALGADO</option>
        </select>
      </div>
      <div class="col-md-6 form-group">
        <input class="form-control" type="text" placeholder=" PREÇO"  id="precoProduto"  />
      </div>
      <div class="col-md-6 form-group">
           <input type="text" placeholder=" LOCAL"  class="form-control" id="local"/>
      </div>
      <div class="col-md-3 form-group">
        <select class="form-control" id="inicio">
            <option value=""> INICIO</option>
            <option value="07:00:00"> 07:00:00</option>
            <option value="08:00:00"> 08:00:00</option>
            <option value="09:00:00"> 09:00:00</option>
            <option value="10:00:00"> 10:00:00</option>
            <option value="11:00:00"> 11:00:00</option>
            <option value="12:00:00"> 12:00:00</option>
            <option value="13:00:00"> 13:00:00</option>
            <option value="14:00:00"> 14:00:00</option>
            <option value="15:00:00"> 15:00:00</option>
            <option value="16:00:00"> 16:00:00</option>
            <option value="17:00:00"> 17:00:00</option>
            <option value="18:00:00"> 18:00:00</option>
            <option value="19:00:00"> 19:00:00</option>
            <option value="20:00:00"> 20:00:00</option>
            <option value="21:00:00"> 21:00:00</option>
            <option value="22:00:00"> 22:00:00</option>
            <option value="23:00:00"> 23:00:00</option>
        </select> 
      </div>
      <div class="col-md-3 form-group">
        <select class="form-control" id="termino">
          <option value=""> TÉRMINO</option>
          <option value="07:00:00"> 07:00:00</option>
          <option value="08:00:00"> 08:00:00</option>
          <option value="09:00:00"> 09:00:00</option>
          <option value="10:00:00"> 10:00:00</option>
          <option value="11:00:00"> 11:00:00</option>
          <option value="12:00:00"> 12:00:00</option>
          <option value="13:00:00"> 13:00:00</option>
          <option value="14:00:00"> 14:00:00</option>
          <option value="15:00:00"> 15:00:00</option>
          <option value="16:00:00"> 16:00:00</option>
          <option value="17:00:00"> 17:00:00</option>
          <option value="18:00:00"> 18:00:00</option>
          <option value="19:00:00"> 19:00:00</option>
          <option value="20:00:00"> 20:00:00</option>
          <option value="21:00:00"> 21:00:00</option>
          <option value="22:00:00"> 22:00:00</option>
          <option value="23:00:00"> 23:00:00</option>
        </select>
      </div>
      <div class="col-md-6 form-group">
          <input type="text" placeholder=" DIAS"  class="form-control" id="dias"/>
      </div>
      <div class="col-md-12 form-group">
          <textarea cols="82" rolws="10" class="form-control" placeholder="COMENTÁRIO" id="comentario"></textarea>
      </div>
       <div class="col-md-12 form-group">
          <a href="#" onclick="gravaDados();"><img class="center-block" src="images/btn_cadastrar.png" width="150" border="0"/></a>
        
      </div>
     </div> 
  </div>

  

<!-- 
<table width="100%" border="0" style="float:left; margin-top:20px;">
    <tr>
    <td align="center" valign="middle" id="posicaoImagem"><a href="index.html">
    <img src="images/logo_03.png" width="150" border="0"/></a></td>
  </tr>

</table>

<table width="100%" border="0" style="float:left; margin-top:20px;">


  <tr>
    
    </td>

    <td height="60" align="right" valign="middle">
    
    <input type="text" placeholder=" NOME" id="nomeProduto"  style=" width:300px; height:40px;"/>
    
    </td>

    <td  height="60" align="left" valign="middle">
    
    <select style=" width:300px; height:40px;" id="tipoProduto">
      <option value=""> TIPO DE PRODUTO</option>
        <option value="doce"> DOCE</option>
        <option value="salgado"> SALGADO</option>
    </select>

  </tr>

</td>

  <tr>
    <td  height="60" align="right" valign="middle">
    <input onkeypress="formataReal(this.value,this.id);" type="text" placeholder=" PREÇO"  style=" width:300px; height:40px;" id="preçoProduto"  /></td>

    <td><form action="envia_foto.php" method="post" enctype="multipart/form-data" id="imagem" ><input type="file" name="Arquivo" id="Arquivo"><br><input type="submit" value="Enviar"><input type="reset" value="Cancelar"></form></td>
  </tr>
  </table>

  <table width="100%" border="0" style="float:left;">
   <tr>
    <td  height="60" align="right" valign="middle">
    <select style=" width:150px; height:40px;" id="inicio">
      <option value=""> INICIO</option>
        <option value="7"> 07:00</option>
        <option value="8"> 08:00</option>
        <option value="9"> 09:00</option>
        <option value="10"> 10:00</option>
        <option value="11"> 11:00</option>
        <option value="12"> 12:00</option>
        <option value="13"> 13:00</option>
        <option value="14"> 14:00</option>
        <option value="15"> 15:00</option>
        <option value="16"> 16:00</option>
        <option value="17"> 17:00</option>
        <option value="18"> 18:00</option>
        <option value="19"> 19:00</option>
        <option value="20"> 20:00</option>
        <option value="21"> 21:00</option>
        <option value="22"> 22:00</option>
        <option value="23"> 23:00</option>
    </select> 
    </td>

    <td  width="150" height="60" align="right" valign="middle">

    <select style=" width:150px; height:40px;" id="termino">
    <option value=""> TÉRMINO</option>
        <option value="7"> 07:00</option>
        <option value="8"> 08:00</option>
        <option value="9"> 09:00</option>
        <option value="10"> 10:00</option>
        <option value="11"> 11:00</option>
        <option value="12"> 12:00</option>
        <option value="13"> 13:00</option>
        <option value="14"> 14:00</option>
        <option value="15"> 15:00</option>
        <option value="16"> 16:00</option>
        <option value="17"> 17:00</option>
        <option value="18"> 18:00</option>
        <option value="19"> 19:00</option>
        <option value="20"> 20:00</option>
        <option value="21"> 21:00</option>
        <option value="22"> 22:00</option>
        <option value="23"> 23:00</option>
    </select>
    </td>

    <td  width="763" height="60" align="left" valign="middle">
      <input type="text" placeholder=" DIAS"  style=" width:300px; height:40px;" id="dias"/>
    </td>
  </tr>
  </table> 

<table width="100%" border="0" style="float:left;">
  <tr>

    <td  width="763" height="60" align="center" valign="middle"><input type="text" placeholder=" LOCAL"  style=" width:605px; height:40px;" id="local"/></td>

 </tr>

  <tr>

    <td  width="763" height="60" align="center" valign="middle"><textarea cols="82" rolws="10" placeholder="COMENTÁRIO" id="comentario"></textarea></td>

 </tr>

</table>
  

  <table width="100%" border="0" style="float:left; margin-top:20px;">

  <tr>
    <td  height="39" align="center" valign="middle"><a href="#" onclick="gravaDados();"><img src="images/btn_cadastrar.png" width="150" border="0"/></a></td>
  </tr>
  <tr>
    <td align="center" valign="middle">&nbsp;</td>
  </tr>

</table> -->


                       



    

    


          
                        
</body>
</html>

<script>
  



  function gravaDados()
  {
    
    // TROCO A LOGO PELO GIF LOADING.
    //document.getElementById("posicaoImagem").innerHTML = '<img src="images/loading.gif" width="80"/>';
    
    // CRIO AS VARIAVEIS E CHAMO OS VALORES DAS CAIXAS DE INPUTS HTML
    var nome = document.getElementById("nomeProduto").value;
    var tipo = document.getElementById("tipoProduto").value;
    var preco = document.getElementById("precoProduto").value;
    var inicio = document.getElementById("inicio").value;
    var termino = document.getElementById("termino").value;
    var dias = document.getElementById("dias").value;
    var local = document.getElementById("local").value;
    var comentario = document.getElementById("comentario").value;

    
    
    // OBRIGO O USUÁRIO A PREENCHER OS CAMPOS DOS INPUTS
    if(nome == ""||tipo == ""||preco == ""||inicio == ""||termino == ""||dias == ""||comentario == ""||local == "")
    {
        alert("Complete todos os campos!");
        document.getElementById("posicaoImagem").innerHTML = '<a href="index.html"><img src="images/logo_03.png" width="150" border="0"/></a>';
        return false();
    }
    else
    {

      // monta objeto para envio
      var prod = {
        nome : nome,
        tipo : tipo,
        preco : preco,
        inicio : inicio,
        termino : termino,
        dias : dias,
        local : local,
        comentario : comentario
      }
      enviaFormulario(prod);
      
    }


  }

  function enviaFormulario(par){

    var parametros = par;
    // ENVIO OS PARAMENTROS PARA A PÁGINA QUE SUBMETE AO CADASTRO
      $.post('controller/Produto.php',
        parametros,
        function(data)
        {
          var resultado = data.split(",");
          if(resultado[0] == "ok"){
            location.href="enviaFotoProduto.php?id="+resultado[1];
          }
        }
      );
  }

</script>