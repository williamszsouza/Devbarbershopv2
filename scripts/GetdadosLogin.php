<?php 

session_start();

include '../conexao.php';


$email = $_POST['email'];
$senha = $_POST['senha'];
$senha_confirm = $_POST['senha-confirm'];



if($senha === $senha_confirm){
    $email = $mysqli->real_escape_string($email);
    $senha = $mysqli->real_escape_string($senha);
    $sql = "SELECT * FROM devbarbershop.usuarios WHERE email='$email' AND senha='$senha'";
    $sql_query = $mysqli->query($sql);
    $result = $sql_query->num_rows;
    if($result>0){      
        $_SESSION['email'] = $_POST['email'];
        header("Location: ../painel_usuario.php");
        exit;
        
    } else{
        header("Location: ../register.html");
        exit;
    }
}


?>