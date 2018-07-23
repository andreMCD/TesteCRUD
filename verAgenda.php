<?php include("Class/classCrud.php");?>         
    <?php 
        $crud=new classCrud();
        $idUser=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

        $bFetch=$crud->selectDB("*", "usuario", "where id=?", array($idUser) );
        $fetch=$bFetch->fetch(PDO::FETCH_ASSOC);
    ?>
    <h1>Olá <?php echo $fetch['nome']; ?></h1>
<?php include("agenda.php"); ?>