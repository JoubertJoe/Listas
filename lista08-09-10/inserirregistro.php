
 <style>
  table{
      border-collapse: collapse;
      margin:auto;
  }
  tr, td, th{
      border: 1px solid black;
      text-align: center;
      
  }
  body{
    text-align: center;
    color: #4CAF50;
    font-size: 20px;
}      
input {
   width: 50%;
}

input[type=submit] {
 background-color: #4CAF50; /* Verde */
 border: none;
 color: white;
 padding: 15px 32px;
 text-align: center;
 text-decoration: none;
 display: inline-block;
 font-size: 16px;
}
input[type=reset] {
 background-color: #4CAF50; /* Verde */
 border: none;
 color: white;
 padding: 15px 32px;
 text-align: center;
 text-decoration: none;
 display: inline-block;
 font-size: 16px;
}

 </style>
<?php
    //inserirregistro.php
    include "conexao.php";

    $tabela = $_GET['tabela'];
    echo "<p>Tabela: " . $tabela . "</p>";

    #$dados = unserialize($_GET['dados']);
    $dados = unserialize(base64_decode($_GET['dados']));
    #$dados = base64_encode(serialize($_GET['dados']));

    /*$codDepto = $_POST['codDepto'];
    $nome = $_POST['nome'];
    $gerente = $_POST['gerente'];
    $dataGerente = $_POST['dataGerente'];*/

    $sql = "INSERT INTO $tabela VALUES(";

    for ($i = 0; $i < sizeof($dados); $i++){
        if($i == sizeof($dados) -1){
            if (is_numeric($_POST[$dados[$i]])) { 
                $sql .= $_POST[$dados[$i]] . ")";
            }else{
                $sql .= "'" . $_POST[$dados[$i]] . "')";
            }
            
        }else{
            if (is_numeric($_POST[$dados[$i]])) { 
                $sql .= $_POST[$dados[$i]] . ", ";
            }else{
                $sql .= "'" . $_POST[$dados[$i]] . "', ";
            }
        }
    }
    

    echo $sql;

    if(mysqli_query($conn, $sql)){
        echo "<p>Registro INSERIDO com sucesso!</p>";
    }else{
        echo "<p>Erro: ".mysqli_error($conn)."</p>";
    }

    mysqli_close($conn);
?>