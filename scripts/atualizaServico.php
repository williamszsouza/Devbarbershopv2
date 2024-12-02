<?php 

include '../conexao.php';

$nomeAntigo = $_POST['nome-antigo'];

$sql = "SELECT * FROM devbarbershop.servicos where nome='$nomeAntigo'";
$res = $mysqli->query($sql);
if($res->num_rows>0){
    $nome = $mysqli->real_escape_string($_POST['nome']);     
    $servico = $mysqli->real_escape_string($_POST['servico']);
    $horario = $mysqli->real_escape_string($_POST['horario']);
    $sql_code = "UPDATE devbarbershop.servicos SET nome='$nome', servico='$servico',horario='$horario' WHERE nome='$nomeAntigo'";
    $mysqli->query($sql_code);            
    header("Location: ../painel_usuario.php");
}else{
    header("Location: ../index.html");
}


?>