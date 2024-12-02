<?php 

include"../conexao.php";

$nome = $mysqli->real_escape_string($_POST['nome']);
$servico = $mysqli->real_escape_string($_POST['servicos']);
$horario = $mysqli->real_escape_string($_POST['horario']);

if(isset($nome) and isset($servico)){
    $sql = "INSERT INTO devbarbershop.servicos(nome,servico,horario) VALUES('$nome','$servico','$horario
    ')";
    $mysqli->query($sql);
    header("Location: ../index.html");
}else{
    header("Location: ../index.html");
}

?>