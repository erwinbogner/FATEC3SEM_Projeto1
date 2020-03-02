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
            <h2> [Montadora] </h2>
            <br>
            <table>
                <thead>
                   <tr>
                        <th>ID</th>
                        <th>Montadora</th>
                        <th>DT Inclusão</th>
                        <th>Alterar</th>
                        <th>Excluir</th>                    
                    </tr>
                </thead>
                <tbody>
                   <!--acesso ao banco de dados leitura tabela!-->
                   <?php include( 'include/aTabMontadora.php'); ?> 
                </tbody>
            </table>
            <br>
            <br>
            <br>
            <br>
            <br>
            <nav class="CadMontMenu">
                <ul>
                    <li><a href="NVMontadora.php">Inclusão</a></li>
                    <li><a href="">Pesquisa</a></li>     
                </ul>
            </nav>
        </div>
        <!-- CONTEUDO=============================================== !-->
    </main>
    <footer class="footerGeral">
        <?php include( 'include/footer.php'); ?>
    </footer>    
    <?php include('include/fim.php'); ?>
</body>
</html>




<!--
<form id="f_CadMontadora">
                <br>
                <label id="l_id">
                    <input type="text" name="i_id">
                </label>
                <br>
                <label id="l_montadora">
                    <input 
                </label>
            </form>
            
           
!-->          