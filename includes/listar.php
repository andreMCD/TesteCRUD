        <?php include("../includes/topo.php"); ?>
        <?php include("../Class/classCrud.php"); ?>
        <?php include("../includes/menu.php"); ?>
        <section class="content">   
            <table class="tabelaLista">
                <tr>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Telefone</td>
                    <td>Descrição</td>
                    <td>Ações</td>
                </tr>
                <!--Estrutura de Loop -->
                <?php
                    $crud=new classCrud(); 
                    $bFetch=$crud->selectDB("*", "usuario", "", array() );

                    while($fetch=$bFetch->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <tr>
                        <td><?php echo $fetch['nome']; ?></td>
                        <td><?php echo $fetch['email']; ?></td>
                        <td><?php echo $fetch['telefone']; ?></td>
                        <td><?php echo $fetch['descricao']; ?></td>
                        <td>
                            <div class="agenda"><a href="<?php echo "../verAgenda.php?id={$fetch['id']}"; ?>">Agenda</a></div>
                            <div class="editar"><a href="<?php echo "../cadastro.php?id={$fetch['id']}"; ?>">Editar</a></div>
                            <div><a class="deletar" href="<?php echo "../controllers/controllerDeletar.php?id={$fetch['id']}"; ?>">Deletar</a></div>
                        </td>
                    </tr> 

                <?php  
                    }
                ?>
            </table> 
        </section>
        <script src="../js/retorno.js"></script>