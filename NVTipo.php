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
            <h2> [Tipos Veiculos - Novo Contato] </h2>
            <br>
            <table>
                <thead>
                   <tr>
                       <th>ID</th>
                       <th>TIPO</th>
                       <th>DT Inclusão</th>
                       <th>Alterar</th>
                       <th>Excluir</th>           
                    </tr>
                </thead>
                <tbody>
                   <!--acesso ao banco de dados leitura tabela!-->
                   <?php include( 'include/aTabTipo.php'); ?> 
                </tbody>
            </table>
            <br>
            <br>
            <aside>
                <br>
                <form action="salvarTipo.php">
                    Tipo veiculo: <input type="text" id="i_nometipo" name="nometipo"> 
                    <br/>
                    <br>
                    <input class="b_add" id="botao" type="submit" value="Adicionar">
                </form>
                <div class="b_voltar">
                    <a href="CadTipos.php">Voltar</a>
                </div>
            <br>  
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

