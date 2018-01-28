<?php 

require_once("config.php");

//carrega um usuario
//$root = new Usuario();
//$root->loadById(4);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("e");
//echo json_encode($search);

//carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("user","12345678");
//echo $usuario;

/*
//CRIANDO UM NOVO USUARIO
$aluno = new Usuario("aluna", "@lun@");
$aluno->insert();
echo $aluno;
*/

$usuario = new Usuario();

$usuario->loadById(8);
$usuario->update("professor", "!@#%%");
echo $usuario;

?>