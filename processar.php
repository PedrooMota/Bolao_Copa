<?
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processar Dados</title>
</head>
<body>
       
</body>
</html>

<?php
    include "conexao.php";
    $banco = new Usuario();
    if(isset($_GET['nome'])){
        $nome = strip_tags(str_replace(";","_", $_GET['nome']));
        $email = strip_tags(str_replace(";","_", $_GET['email']));
        $telefone = strip_tags(str_replace(";","_", $_GET['telefone']));

        // $res = $banco->inserirUsuario($nome, $email, $telefone);
        setcookie('nome', $nome, time() + (86400 * 30), "/");
        setcookie('email', $email, time() + (86400 * 30), "/");
        setcookie('telefone', $telefone, time() + (86400 * 30), "/");
      
        header("Location:paginaHome.php");
  
    } 
 
    if(isset($_GET['vencedor1A'])){

        $vencedor1A = $_GET['vencedor1A'];
        $vencedor2A = $_GET['vencedor2A'];
    
        $vencedor1B = $_GET['vencedor1B'];
        $vencedor2B = $_GET['vencedor2B'];
    
        $vencedor1C = $_GET['vencedor1C'];
        $vencedor2C = $_GET['vencedor2C'];
    
        $vencedor1D = $_GET['vencedor1D'];
        $vencedor2D = $_GET['vencedor2D'];
    
        $vencedor1E = $_GET['vencedor1E'];
        $vencedor2E = $_GET['vencedor2E'];
    
        $vencedor1F = $_GET['vencedor1F'];
        $vencedor2F = $_GET['vencedor2F'];
    
        $vencedor1G = $_GET['vencedor1G'];
        $vencedor2G = $_GET['vencedor2G'];
    
        $vencedor1H = $_GET['vencedor1H'];
        $vencedor2H = $_GET['vencedor2H'];
    
    
        $nome = $_COOKIE['nome'];
        $email = $_COOKIE['email'];
        $telefone = $_COOKIE['telefone'];

        $res = $banco->controle($email, $telefone);
        if($res == true){
            $res = $banco->inserirUsuario($nome, $email, $telefone);
            $res = $banco->inserirGrupo($vencedor1A, $vencedor2A, $vencedor1B, $vencedor2B, $vencedor1C, $vencedor2C, $vencedor1D, $vencedor2D, $vencedor1E, $vencedor2E, $vencedor1F, $vencedor2F, $vencedor1G, $vencedor2G, $vencedor1H, $vencedor2H, $telefone);  
        }else{
            header("Location:cadastrado.php");
        }
      
      
     
    }
?>
 