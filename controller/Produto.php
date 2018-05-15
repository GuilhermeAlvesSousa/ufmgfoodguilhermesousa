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
$tipo = $_POST['tipo'];
$preco  = $_POST['preco'];   
$inicio  = $_POST['inicio']; 
$termino = $_POST['termino'];
$dias = $_POST['dias'];
$local = $_POST['local'];
$comentario = $_POST['comentario'];




  $conexao = new Conexao();

     $sql = "INSERT INTO cadastro_produto (nome,tipo,preco,inicio,termino,dias,local,comentario)"  
     ."VALUES('".$nome."','".$tipo."','".$preco."','".$inicio."','".$termino."','".$dias."','".$local."','".$comentario."');";

     mysql_query($sql);	

	// if(mysqli_query($link, $sql)){
	//     echo "Records inserted successfully.";
	// } else{
	//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	// }

 	echo  "ok," . mysql_insert_id();
 	return json_decode("ok," . mysql_insert_id());
 $conexao->desconectarDb();


