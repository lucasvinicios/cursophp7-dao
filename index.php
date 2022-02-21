<?php

require_once("config.php");


/* $sql = new SQL();

$usuarios = $sql->select("SELECT * FROM tb_carros");

echo json_encode($usuarios);

*/

// Carrega um usuário

/*
$root = new Usuario; 

$root->loadById(3);

echo $root;
*/

/*$lista = Usuario::getList();

echo json_encode($lista); 

*/

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("r"); 
//echo json_encode($search);

//Carrega um usuário usando o login e a senha

$usuario = new Usuario();
$usuario->login("root", "54321");

echo $usuario;



?>