<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <?php include( 'include/head.php'); ?>
</head>
<body>
    <header>
        <?php include( 'include/header.php'); ?>
    </header>
    <main id="container-fluid">
        <div class="menu row">
            <?php include( 'include/menu.php'); ?>
        </div>
        <!-- CONTEUDO=============================================== !-->

        <?php
            $id = filter_input( INPUT_GET, 'id');
            $nometipo = filter_input( INPUT_GET, 'nomeTipo');
                               
                    
        ?>
        
         <div id="conteudo">
            <h2> [Tipos Veiculos - Altera] </h2>
            <br>
            <table>
                <thead>
                   <tr>
                       <th>ID</th>
                       <th>Tipos</th>
                       <th>DT Inclusão</th>
                       <th>Alterar</th>
                       <th>Excluir</th>    
                    </tr>
                </thead>
                <tbody>
                   <!--acesso ao banco de dados leitura tabela!-->

                </tbody>
            </table>
            <br>
            <br>
            <aside>
            <br>
                <form action="alterarTipo.php">
                   <input type="hidden" name="id" value="<?php echo $id ?>" />
                    Montadora: <input type="text" name="nometipo" value="<?php echo $nometipo ?>"> <br/>
                    <br>
                    <input class="b_add" type="submit" value="ALTERAR">
                </form>
                <div class="b_voltar">
                    <a href="CadTipos.php">Voltar</a>
                </div>
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

