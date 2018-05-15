<?php
      require_once('../model/Conexao.php'); 
   		
      // esta recebendo varivael vinda de req post de formulario de login
      $email  = $_POST['email']; 
      
      $senha  = $_POST['senha'];

      $conexao = new Conexao();
        
        $sql = "SELECT id, nome,senha,tipoUsuario FROM cadastro_cliente where senha='".$senha."' AND email='".$email."'";
        $res = mysql_query($sql);
        $row = mysql_fetch_assoc($res);
      
       
        
              // VERIFICA SE A SENHA DIGITADA É IGUAL A DO BANCO
              if($row["senha"] == $senha)
              {
                   session_start();
                   $_SESSION["idcliente"] = $row["id"]; 
  		 		         $_SESSION["nome"] = $row["nome"];
  				         $_SESSION["tipoUsuario"] = $row["tipoUsuario"];
		                
                    echo "ok"; // ok
                    json_decode("ok");       
             }
             else{
                 echo "erro";// erro
                 json_decode("erro");
             }
        
        
        
        $conexao->desconetarDb();