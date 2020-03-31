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
           
         <div id="conteudo">
            <h2> [Veiculo - Novo cadastro] </h2>
            <br>
            <table>
                <thead>
                   <tr>
                        <th>ID</th>
                        <th>Placa</th>
                        <th>Veiculo</th>
                        <th>DT Inclusão</th>
                    
                    </tr>
                </thead>
                <tbody>
                   <!--acesso ao banco de dados leitura tabela!-->
                   <?php include( 'include/aTabVeiculo.php'); ?> 
                </tbody>
            </table>
            <br>
            <br>
            <aside>
            <p>
                <form id="salvarVeic" action="salvarVeiculo.php">
                    <label class="l1">
                       Placa___: <input type="text" id="iplaca" name="placa">
                       <p id="perro1"></p>
                    </label>
                    <br>
                    <label class="l1">
                        Veiculo_: <input type="text" id="iveiculo" name="veiculo" placeholder="especifique o tipo do veiculo">
                        <p id="perro2"></p>
                    </label>
                    <br>
                    <label class="l1">
                        Montadora:
                        <p id="perro3"></p>
                    </label>
                    <br>
                    <label class="l1">
                        Tipo:
                        <p id="perro4"></p>
                    </label>
                    <br>
                    <br>
                    <label class="l1">
                       proprietário: 
                       <p class="perro5"></p>
                    </label>
                    <br>
                    <br>
                   <input class="b_add"  id="botao" type="submit" value="Adicionar">
                </form>
                <div class="b_voltar">
                    <a href="CadVeiculoProprietario.php">Voltar</a>
                </div>
            </p>    
            </aside>
            <br>
            <br>           
           </div>
        <!-- CONTEUDO=============================================== !-->
    </main>
    <script src="js/Veiculo.js"></script>
    <footer class="footerGeral">
        <?php include( 'include/footer.php'); ?>
    </footer>    
    <?php include('include/fim.php'); ?>
</body>
</html>

