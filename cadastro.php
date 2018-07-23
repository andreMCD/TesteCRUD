<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Cadastro de Usuáriot</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <section class="content">
<?php
    include("Class/classCrud.php");
    if(isset($_GET['id'])){
        $acao="Editar";

        $crud=new classCrud();
        $bFetch=$crud->selectDB("*", "usuario", "where id=?", array($_GET['id']));
        $fetch=$bFetch->fetch(PDO::FETCH_ASSOC);
        $id=$fetch['id'];
        $nome=$fetch['nome'];
        $email=$fetch['email'];
        $telefone=$fetch['telefone'];
        $descricao=$fetch['descricao'];
    }else {
        $acao="cadastrar";
        $id=0;
        $nome="";
        $email="";
        $telefone="";
        $descricao="";
    }
?>  
        <div class="modal__contato">
            <h2>Editar</h2>
            <form class="form__estilo" name="formCadastro" id="formCadastro" action="controllers/controllerCadastro.php" method="post">
                <input type="hidden" name="acao" id="acao" value="<?php echo $acao; ?>">
                <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                <input type="text" name="nome" id="nome" placeholder="Nome" value="<?php echo $nome; ?>">
                <input type="text" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>">
                <input type="text" name="telefone" id="telefone" placeholder="Telefone" value="<?php echo $telefone; ?>">
                <input type="text" name="descricao" id="descricao" placeholder="Descrição" value="<?php echo $descricao; ?>">
                <input type="submit" value="<?php echo $acao; ?>">
            </form>
        </div>
    </section>
<?php include("includes/footer.php"); ?>            