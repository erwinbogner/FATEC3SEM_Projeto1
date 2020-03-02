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
           
         <div id="conteudo">
            <h2> [Montadora - Novo Contato] </h2>
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
                   <?php include( 'include/aTabMontadora.php'); ?> 
                </tbody>
            </table>
            <br>
            <br>
            <aside>
            <p>
                <form action="salvarMontadora.php">
                    Montadora: <input type="text" name="nomemontadora"> <br/>
                    <br>
                    <input class="b_add" type="submit" value="Adicionar">
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

