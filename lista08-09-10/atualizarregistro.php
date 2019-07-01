
<?php
    //inserirregistro.php
    include "conexao.php";

    $tabela = $_GET['tabela'];

    $dados = unserialize(base64_decode($_GET['dados']));

    $valores = unserialize(base64_decode($_GET['valores']));

    $sql = "UPDATE $tabela SET ";
    for ($i = 0; $i < sizeof($dados);$i++){
        if($i == sizeof($dados) -1){
            if (is_numeric($_POST[$dados[$i]])) { 
                $sql .= $dados[$i] . " = " . $_POST[$dados[$i]];
            }else{
                $sql .= $dados[$i] . " = '" . $_POST[$dados[$i]] . "'";
            }
        }else{
            if (is_numeric($_POST[$dados[$i]])) { 
                $sql .= $dados[$i] . " = " . $_POST[$dados[$i]] . ", ";
            }else{
                $sql .= $dados[$i] . " = '" . $_POST[$dados[$i]] . "', ";
            }
        }
    }

    $sql .= " WHERE ";
    for ($i = 0; $i < sizeof($dados);$i++){
        if($i == sizeof($dados) -1){
            if (is_numeric($valores[$i])) { 
                $sql .= $dados[$i] . " = " . $valores[$i];
            }else{
                $sql .= $dados[$i] . " = '" . $valores[$i] . "'";
            }
        }else{
            if (is_numeric($valores[$i])) { 
                $sql .= $dados[$i] . " = " . $valores[$i] . " AND ";
            }else{
                $sql .= $dados[$i] . " = '" . $valores[$i] . "' AND ";
            }
        }
    }
    
    echo $sql;

    if(mysqli_query($conn, $sql)){
        echo "<p>Registro ATUALIZADO com sucesso!</p>";
    }else{
        echo "<p>Erro: ".mysqli_error($conn)."</p>";
    }

    mysqli_close($conn);
?>