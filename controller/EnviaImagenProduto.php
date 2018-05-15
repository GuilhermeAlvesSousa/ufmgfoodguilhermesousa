<?php
require_once('../model/Conexao.php'); 
//$link = mysqli_connect("localhost", "root", "", "teste");

// Check connection
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
//}
// declarando variaveis que serão capturadas pela request POST do php
// esta recebendo varivael vinda de req post de formulario de login
$id  = $_POST['id']; 
$arqName = $_FILES['photo']['name'];
// O tipo mime do arquivo. Um exemplo pode ser "image/gif"
$arqType = $_FILES['photo']['type'];
// O tamanho, em bytes, do arquivo
$arqSize = $_FILES['photo']['size'];
// O nome temporário do arquivo, como foi guardado no servidor
$arqTemp = $_FILES['photo']['tmp_name'];
// O código de erro associado a este upload de arquivo
$arqError = $_FILES['photo']['error'];
if ($arqError == 0) {
$pasta = '../uploads/';
$upload = move_uploaded_file($arqTemp, $pasta . $id .".".explode(".", $arqName)[1]);
}
header("location: ../cadastroVendedor.php");



