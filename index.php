<?php

require_once("config.php");
//Carrega um usuário
//$root = new Usuario();
//$root->loadById(4);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("u");
//echo json_encode($search);

//Carrega um usuário usando login e a senha
//$usuario = new Usuario();
//$usuario->login("Muhate", "Bind123");
//echo $usuario;

//Criando um novo usuario
//$aluno = new Usuario("aluno", "@a1un0");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->update("professor", "!#$@^72");

echo $usuario;

?>