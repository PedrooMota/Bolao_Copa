<?php

class Usuario{
	private $servidor = "sistema_bolao.vpshost6658.mysql.dbaas.com.br";
	private $usuario = "sistema_bolao";
	private $senha = "Bol@o1985_temp";
	private $dbname = "sistema_bolao";
	private $con = null;

    //Função que constroí a conexão do banco com o php
	function __construct(){	
        $this->con = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->dbname);
    }   

	
	// Função para inserir os dados na tabela "usuarios"
    function inserirUsuario($nome, $email, $telefone){
	
		$comando = "insert into usuario (nome, email, telefone) values ('".$nome."', '".$email."', '".$telefone."');";
		$result = mysqli_query($this->con, $comando);

		header('Location:paginaHome.php');
	}

	function controle($email, $telefone){
		$comando = "select count(*) as teste from usuario where email = '$email' or telefone = '$telefone'";
		$result = mysqli_query($this->con, $comando);

		while($coluna = $result->fetch_object()){
			$teste2 = $coluna->teste;	
			if($teste2 == 0){
				return true;
			}else{
				return false;
			}
		}
	}

	// Função para inserir os dados na tabela "grupos"
	function inserirGrupo($vencedor1A, $vencedor2A, $vencedor1B, $vencedor2B, $vencedor1C, $vencedor2C, $vencedor1D, $vencedor2D,
	$vencedor1E, $vencedor2E, $vencedor1F, $vencedor2F, $vencedor1G, $vencedor2G, $vencedor1H, $vencedor2H, $telefone){

		$comando = "select idUsuario from usuario where telefone = '$telefone'";
		$result = mysqli_query($this->con, $comando);
		while($coluna = $result->fetch_object()){
			$UsuarioId = $coluna->idUsuario;	
		}
		
		$comando = "insert into grupos (vencedor1A, vencedor2A, vencedor1B, vencedor2B ,vencedor1C, vencedor2C, vencedor1D, vencedor2D, vencedor1E, vencedor2E, vencedor1F, vencedor2F, vencedor1G, vencedor2G, vencedor1H, vencedor2H, usuario_idUsuario) values ('".$vencedor1A."', '".$vencedor2A."', '".$vencedor1B."', '".$vencedor2B."', '".$vencedor1C."', '".$vencedor2C."', '".$vencedor1D."', '".$vencedor2D."', '".$vencedor1E."', '".$vencedor2E."', '".$vencedor1F."', '".$vencedor2F."', '".$vencedor1G."', '".$vencedor2G."', '".$vencedor1H."', '".$vencedor2H."', '".$UsuarioId."');";
		$result = mysqli_query($this->con, $comando);
		header("Location:final.php");
		
	}

}