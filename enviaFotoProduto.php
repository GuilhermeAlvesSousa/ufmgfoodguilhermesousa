<?php
  $id  = $_GET['id']; 
?>
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
  <form id="data" method="post" enctype="multipart/form-data" action="controller/EnviaImagenProduto.php">
    <div class="container cadastros_pdr_container">
     <div class="row">
      <div class="col-md-12 form-group">
        <a href="index.html">
        <img src="images/logo_03.png" class="center-block" width="200" border="0"/>
        </a>
      </div>
      <div class="col-md-12 form-group">
        <input type="file" id="photo" name="photo" class="form-control" />
      </div>
      <div class="col-md-12 form-group">
        <input type="hidden" name="id" id="id"  value="<?php echo $id; ?>" />
      </div>
       <div class="col-md-12 form-group">
 <!--          <a href="#" onclick="enviaFoto();"><img class="center-block" src="images/btn_cadastrar.png" width="150" border="0"/></a> -->
           <input type="image" src="images/btn_cadastrar.png" alt="Submit">

      </div>
     </div> 
  </div>
  </form>

                        
</body>
</html>

<script>
  



  function enviaFoto()
  {

      var id = document.getElementById("id").value;


      if(id == "")
      {
        alert("Voce sera redirecionado a outra janela");
        location.href="cadastroProduto.php";
      }
      var data = new FormData();
      jQuery.each(jQuery('#photo')[0].files, function(i, file) {
          data.append('photo-'+i, file);
      });
      jQuery.ajax({
          url: "controller/EnviaImagenProduto.php?id="+id,
          data: data,
          cache: false,
          contentType: "multipart/form-data; charset=utf-8; boundary=" + Math.random().toString().substr(2),
          processData: false,
          method: 'POST',
          type: 'POST', // For jQuery < 1.9
          success: function(data){
              alert(data);
          }
      });
      // var photo = $("#photo").val();
      // var url = "controller/EnviaImagenProduto.php?id="+id;
      // $.post(url,{photo:photo}
      //   ,
      //   function(data){
      //     alert("Cadastro realizado com sucesso. Você será direcionado para a página de acesso.");
      //     location.href="cadastroVendedor.php";
      //    }
      // );
    
  }
  
</script>