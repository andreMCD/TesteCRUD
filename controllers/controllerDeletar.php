<?php include("../class/classCrud.php");?>   
         
    <?php 
        $crud=new classCrud();
        $idUser=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

        $crud->deleteDB("usuario", "id=?", array($idUser) );
        echo '<script> window.location = "../includes/listar.php"; </script>';
    ?>    