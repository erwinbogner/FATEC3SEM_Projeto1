<?php

                            
    $parametro = filter_input( INPUT_GET, "parametro");

    //$server  = "localhost";
    //$server  = "http://172.17.14.3";
    //$server  = 'VirtLinux';
    //$server  = "172.17.14.3";
    //$usuario = "root";
    //$senha   = "sou10VEZ";
    //$banco   = "projeto1";
    $tabela  = "tbtipoveiculos";
    //
    if ($parametro) {
        $sql     = "select * from {$tabela} where nome like '$parametro%' order by id";
    } else {
        $sql = "select * from {$tabela} order by id";
    }

    $mysqllink = new mysqli( $server, $usuario, $senha, $banco);
    if( $mysqllink->connect_error) {
        die( "erro conexÃ£o: " . $mysqllink->connct_error);
    } else {
        $dados = $mysqllink->query( $sql);
        $linha = $dados->fetch_assoc();
        $total = $dados->num_rows;

        if( $total ){ 
            do {
            ?>
                <tr>
                    <td><?php echo $linha['id'] ?></td>
                    <td><?php echo $linha['nomeTipo'] ?></td>
                    <td><?php echo $linha['dt_inclusao'] ?></td>
                    
<td><a href="<?php echo "ALTTipo.php?id=" . $linha['id'] . "&nomeTipo=" . $linha[ 'nomeTipo'] ?>">Alterar</a></td>  
<td><a href="<?php echo "excluirTipo.php?id=" . $linha['id']?>">EXC</a></td>                    
                    

                <!--<td>EXC</td>!-->
                
                </tr>
            <?php
            } while($linha = $dados->fetch_assoc());
            $mysqllink->close();
        }
    }

?>



                            