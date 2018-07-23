<?php
include("../includes/variaveis.php");
include("../Class/classCrud.php");

$crud=new classCrud();

if($acao=='cadastrar'){
    $crud->insertDB("usuario","?,?,?,?,?",array($id,$nome,$email,$telefone,$descricao) );
    echo '<script> window.location = "../index.php"; </script>';
}else {
    $crud->updateDB("usuario", "nome=?, email=?, telefone=?, descricao=?","id=?", array($nome, $email, $telefone, $descricao, $id) );
    echo '<script> window.location = "../includes/listar.php"; </script>';
}
