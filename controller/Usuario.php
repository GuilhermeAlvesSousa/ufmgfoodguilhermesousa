
<?php
require_once('../model/Conexao.php'); 
//$link = mysqli_connect("localhost", "root", "", "teste");

// Check connection
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
//}
// declarando variaveis que serão capturadas pela request POST do php
// esta recebendo varivael vinda de req post de formulario de login
$nome  = $_POST['nome']; 
$email = $_POST['email'];
$fone  = $_POST['fone'];   
$senha  = $_POST['senha']; 
$tipoUsuario = $_POST['tipoUsuario'];
$idcliente = $_POST['idcliente'];




  $conexao = new Conexao();

     $sql = "INSERT INTO cadastro_cliente (nome,email,fone,senha,tipoUsuario)"  
     ."VALUES('".$nome."','".$email."','".$fone."','".$senha."','".$tipoUsuario."');";

     mysql_query($sql);	

	// if(mysqli_query($link, $sql)){
	//     echo "Records inserted successfully.";
	// } else{
	//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	// }
 	
 	return json_decode("ok");;
 $conexao->desconectarDb();

