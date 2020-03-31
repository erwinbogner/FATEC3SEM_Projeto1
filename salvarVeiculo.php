<?php
    
    include_once( 'include/bd.php');
    $nome  =filter_input( INPUT_GET, "nomemontadora");
    $date = date( 'Y-m-d H:i:s');

    $tabela  = "tbmontadora";
    $link=mysqli_connect( $server, $usuario, $senha, $banco);
    //$link=mysqli_connect( "localhost", "root", "", "agenda_telefonica");
    //$link=mysqli_connect( "192.168.1.166", "root", "sou10VEZ", "agenda_telefonica");
    if( $link ) {
        $sql="insert into {$tabela} values ( 0,'$nome','$date')";
        $query = $link->query($sql);
        /*$query = mysqli_query( $link, $sql);*/
        if( $query){
            header( "Location: CadMontadora.php");
        }else{
            die( "Erro: ");
        }
    }else{
        die( "Erro conexão: " . $link);
    }

?>

