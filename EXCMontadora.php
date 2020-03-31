<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <?php include( 'include/head.php'); ?>
</head>
<body>
    <header>
        <?php include( 'include/header.php'); ?>
        <?php include( 'include/bd.php'); ?>
    </header>
    <main id="container-fluid">
        <div class="menu row">
            <?php include( 'include/menu.php'); ?>
        </div>
        <!-- CONTEUDO=============================================== !-->

        <?php
            $id = filter_input( INPUT_GET, 'id');
            $nomemontadora = filter_input( INPUT_GET, 'nomeMontadora');
                               
                    
        ?>
        
         <div id="conteudo">
            <h2> [Montadora - EXCLUI Montadora] </h2>
            <br>
            <table>
                <thead>
                   <tr>
                        <th>ID</th>
                        <th>Montadora</th>
                        <th>DT Inclusão</th>
                    
                    </tr>
                </thead>
                <tbody>
                   <!--acesso ao banco de dados leitura tabela!-->

                </tbody>
            </table>
            <br>
            <br>
            <aside>
            <p>
                <form action="excluirMontadora.php">
                   <input type="hidden" name="id" value="<?php echo $id ?>" />
                    Montadora: <input type="text" name="nomemontadora" value="<?php echo $nomemontadora ?>"> <br/>
                    <br>
                    <input class="b_add" type="submit" value="EXCLUIR">
                </form>
                <div class="b_voltar">
                    <a href="CadMontadora.php">Voltar</a>
                </div>
            </p>    
            </aside>
            <br>
            <br>           
           </div>
        <!-- CONTEUDO=============================================== !-->
    </main>
    <footer class="footerGeral">
        <?php include( 'include/footer.php'); ?>
    </footer>    
    <?php include('include/fim.php'); ?>
</body>
</html>

