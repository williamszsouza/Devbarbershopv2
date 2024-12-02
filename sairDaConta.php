<?php 
session_start();
include 'conexao.php';

if(isset($_SESSION['email'])){
    session_destroy();
    header("Location: form.html");
    exit;
} else{
    header("Location: index.html");
    exit;
}


?>