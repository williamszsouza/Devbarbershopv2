<?php 
session_start();
include '../conexao.php';

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$email = $mysqli->real_escape_string($email);

$sql = "SELECT * FROM devbarbershop.usuarios WHERE email='$email'";
$sql_query = $mysqli->query($sql);
$result = $sql_query->num_rows;

if($result>0){
    echo"usuario ja cadastrado";
    header("Locatio: ../form.html");
} else{
    $email = $mysqli->real_escape_string($email);
    $senha = $mysqli->real_escape_string($senha);
    $usuario = $mysqli->real_escape_string($usuario);
    $_SESSION = $_POST['usuario'];
    if(isset($_SESSION['usuario'])){
        echo"sessao iniciada com sucesso";
    }else{
        echo"erro";
    }
    $sql_code = "INSERT INTO devbarbershop.usuarios(email,senha,usuario) VALUES('$email','$senha','$usuario')";
    $resulttwo = $mysqli->query($sql_code);
    header("Location: ../index.html");
}

?>