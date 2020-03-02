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
        
            <h3>[FALE CONOSCO]</h3>
            <br>
            <form class="form-horizontal">
                        <label class="FaleCon01">Digite teu nome:
                            <input type="text" class="form-control" />
                        </label>
                        <br>
                        <label class="FaleCon02">Digite teu e-mail:
                            <input type="e-mail" class="form-control" />
                        </label>
                        <br>
                        <label class="FaleCon05">Digite a mensagem:
                            <textarea name=" " class="form-control" id-"" cols="30" rows="=10">
                            </textarea>
                        </label>
                        <br>                        
                        <br>
                        <input type="submit" value="ENVIAR">
            </form>
                   
       
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
<label class="FaleCon04">Qual tipo de arte você gosta ?
                            <select class="form-control">
                                <option>Cubismo</option>
                                <option>Expressionismo</option>
                                <option>Surrealismo</option>
                                <option>Abstracionismo</option>
                                <option>Pop-arte</option>
                                <option>TODOS OS TIPOS</option>
                            </select>
                        </label>
                        <p></p>
                        <label class="FaleCon05">Digite a mensagem:
                            <textarea name=" " class="form-control" id-"" cols="30" rows="=10">
                            </textarea>
                        </label>
                        <label class="FaleCon03">Digite teu telefone:
                            <input type="fone" class="form-control" />
                        </label>
                        <br>
                        
!-->                       