<?php
    include "conexao.php";

    $tabela = $_GET['tabela'];

    $dados = unserialize(base64_decode($_GET['dados']));

    $sql = "DELETE FROM $tabela WHERE ";
    for ($i = 0; $i < sizeof($dados);$i++){
        if($i == sizeof($dados) -1){
            if (is_numeric($_POST[$dados[$i]])) { 
                $sql .= $dados[$i] . " = " . $_POST[$dados[$i]];
            }else{
                $sql .= $dados[$i] . " = '" . $_POST[$dados[$i]] . "'";
            }
        }else{
            if (is_numeric($_POST[$dados[$i]])) { 
                $sql .= $dados[$i] . " = " . $_POST[$dados[$i]] . " AND ";
            }else{
                $sql .= $dados[$i] . " = '" . $_POST[$dados[$i]] . "' AND ";
            }
        }
    }    

    echo $sql;

    if(mysqli_query($conn, $sql)){
        echo "<p>Registro DELETADO com sucesso!</p>";
    }else{
        echo "<p>Erro: ".mysqli_error($conn)."</p>";
    }

    mysqli_close($conn);
?>