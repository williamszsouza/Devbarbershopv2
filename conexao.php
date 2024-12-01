<?php 

$database = 'devbarbershop';
$host = 'localhost';
$usuario = 'root';
$senha = '';

$mysqli = new mysqli($host,$usuario,$senha,$database);

if($mysqli->error){
    die('falha ao conectar-se ao banco de dados');
}

?>