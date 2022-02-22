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
//$usuario = new Usuario();
//$usuario->login("root", "54321");
//echo $usuario;

//Insert de um novo usuário
//$aluno = new Usuario("aluno", "@lun0"); 
//$aluno->insert();
//echo $aluno;

// Update no banco 
//$usuario = new Usuario(); 
//$usuario->loadByID(8);
//$usuario->update("professor", "!@##@!"); 
//echo $usuario;

$usuario = new Usuario; 
$usuario->loadById(8);
$usuario->delete();
echo $usuario;




?>