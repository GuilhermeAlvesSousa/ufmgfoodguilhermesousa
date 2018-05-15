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
   
  </div> 

  
</body>
</html>

<script>
  



  function listarProdutos()
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