<?php 

$host = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'login';

$conn = new mysqli($host, $usuario,$senha,$database);

if($conn -> connect_error){
    die("nao deu certo fazer a conexao");
}

?>