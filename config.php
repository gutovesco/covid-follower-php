<?php
$servidor = "localhost";
$dbname = "covid-follower";
$dbusuario = "root";
$dbsenha = "";
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
if(!$conn){
    die("Conexão falhou: " . mysqli_connect_error());
}
?>