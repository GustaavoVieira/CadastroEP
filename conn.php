<?php
$usuario = 'eeepma26_adm_selecao';
$senha = '@selecaomm';
$database = 'eeepma26_selecao';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error){
    die("Falha na conexão ao banco de dados " . $mysqli->error);
}


?>