<?php 

session_start();

if(!isset($_SESSION['email'])){
    header("Location: form.html");
    exit;
}

include'conexao.php';

$sql = "SELECT * FROM devbarbershop.servicos";

$res = $mysqli->query($sql);

$qtd = $res->num_rows;
if($qtd>0){
    print"<link href='styleform.css' rel='stylesheet'>";
    print"<div class='tabela'>";
    print"<table>";
    print"<tr>";
    print"<th>id</th>";
    print"<th>nome</th>";
    print"<th>serviço</th>";
    print"<th>horario</th>";
    print"<th id='options'>opções</th>";
    print"</tr>";
    
    while($row = $res->fetch_object()){
       print "<tr>"; 
       print "<td>".$row->id."</td>"; 
       print "<td>".$row->nome."</td>"; 
       print "<td>".$row->servico."</td>"; 
       print "<td>".$row->horario."</td>"; 
        print"<td id='options'><button onclick=\"location.href='delet.html'\">Deletar</button> <button onclick=\"location.href='editarUser.html'\">atualizar</button> <button onclick=\"location.href='sairDaConta.php'\">sair da conta</button></td>";
       print"</tr>";
     
    }

   
    print"</table>";
    print"</div>";
}else{
    Print"<script>alert('não a serviço a se listar, agende um serviço e volte a este tela')</script>";
    header("Location: index.html#agendar");
}

?>