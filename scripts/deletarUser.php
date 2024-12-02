<?php 

include '../conexao.php';

$nome = $_POST['nome'];

$sql = "DELETE FROM devbarbershop.servicos WHERE nome='$nome'";
$res = $mysqli->query($sql);
header("Location: ../painel_usuario.php")

?>