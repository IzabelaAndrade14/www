<?php 
session_start();
require('conecta_db.php');
require('Usuario.php');
require('UsuarioBO.php');

$nome = filter_input(INPUT_POST, 'cnome', FILTER_SANITIZE_STRING);
$login = filter_input(INPUT_POST, 'clogin', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'csenha') ;
$perfil = $_POST['cperfil'];
$ativo = $_POST["cativo"];
$cnpj = filter_input(INPUT_POST, 'ccnpj');

echo "Nome: $nome <br>";
echo "Login: $login <br>";
echo "Senha: $senha <br>";
echo "Perfil: $perfil <br>";
echo "Cnpj: $cnpj <br>";
echo "Ativo: $ativo <br>";


 ?>