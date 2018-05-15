<?php

class Conexao {
   
    private $host = "localhost";
    private $user = "root";
    private $senha = "";
    private $database = "teste";
    private $conect;
    
    function __construct() {
       
        $this->conectarDb();
    }
    
    public function conectarDb(){
        
       $conect = mysql_connect($this->host, $this->user, $this->senha) or die("Erro ao conectar ao servidor &raquo; ".mysql_error());
       mysql_select_db($this->database) or die("Erro ao selecionar o Banco de Dados &raquo; ".mysql_error());
       return $conect;
    }
    
    public function desconetarDb(){
        
        mysql_close();
    }

}

class Classe  extends Conexao{
   private $nome,$email,$fone,$senha,$tipoUsuario;


      
   
   
   public function cadastraUsuario($idcliente,$nome,$email,$fone,$senha,$tipoUsuario)
   {
       
       $conexao = new Conexao();
       
       if($idcliente == 0)
       {
          $sql = "INSERT INTO cadastra_cliente (nome,email,fone,senha,tipoUsuario) "
                  . "VALUES('".$nome."','".$email."','".$fone."','".$senha."','".$tipoUsuario."');"; 
          mysql_query($sql);
       }
       else
       {
           
       }
       
       
       $conexao->desconetarDb();
       
   }
   public function login($email,$senha){
       
        $conexao = new Conexao();
        
        $sql = "SELECT idcliente, nome,senha,tipoUsuario FROM cadastra_cliente where senha='".$senha."' AND email='".$email."'";
        $res = mysql_query($sql);
        $row = mysql_fetch_assoc($res);
      
       
        
              // VERIFICA SE A SENHA DIGITADA É IGUAL A DO BANCO
              if($row["senha"] == $senha)
              {
              
                 $_SESSION["idcliente"] = $row["idcliente"]; 
		 		 $_SESSION["nome"] = $row["nome"];
				 $_SESSION["tipoUsuario"] = $row["tipoUsuario"];
		
                 echo "ok"; // ok
             }
             else{
                 echo "erro";// erro
             }
        
        
        
        $conexao->desconetarDb();
   }
           
   function getNome() {
       return $this->nome;
   }

   function getEmail() {
       return $this->email;
   }

   function getFone() {
       return $this->fone;
   }

 
   function getTipoUsuario() {
       return $this->tipoUsuario;
   }

   function setNome($nome) {
       $this->nome = $nome;
   }

   function setEmail($email) {
       $this->email = $email;
   }

   function setFone($fone) {
       $this->fone = $fone;
   }

   

   function setTipoUsuario($tipoUsuario) {
       $this->tipoUsuario = $tipoUsuario;
   }
   
      
   function getSenha() {
       return $this->senha;
   }

   function setSenha($senha) {
       $this->senha = $senha;
   }


}
