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