<html>
<head>
  <meta charset="utf-8">
  <style>
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
</head>
<body>
<?php

    echo "<h1>PHP com MySQL - Update</h1>";
    include "conexao.php";
    #include "aula07.php";
    $id = $_GET['id'];
    $tabela = $_GET['tabela'];
    $dados = unserialize($_GET['dados']); 

    $sql = "select * from " . $tabela . " where $dados[0] = " . $id;
    $resultados = mysqli_query($conn, $sql);

    $valores;
    if(mysqli_num_rows($resultados)>0){
        //extraindo linha por linha dos resultados
        while($linha = mysqli_fetch_array($resultados, MYSQLI_NUM)){
            for ($i = 0; $i < sizeof($linha);$i++){
                $valores[$i] = $linha[$i];
            }
        }
    }else{
        echo "<p>Não foram encontrados resultados!</p>";
    }

    $sql = "UPDATE $tabela SET ";
    for ($i = 0; $i < sizeof($dados);$i++){
        if($i == sizeof($dados) -1){
            if (is_numeric($valores[$i])) { 
                $sql .= $dados[$i] . " = " . $valores[$i];
            }else{
                $sql .= $dados[$i] . " = '" . $valores[$i] . "'";
            }
        }else{
            if (is_numeric($valores[$i])) { 
                $sql .= $dados[$i] . " = " . $valores[$i] . ", ";
            }else{
                $sql .= $dados[$i] . " = '" . $valores[$i] . "', ";
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
     

    $campos = base64_encode(serialize($dados));
    $valores1 = base64_encode(serialize($valores));
    echo "<form action=atualizarregistro.php?tabela=$tabela&dados=$campos&valores=$valores1 method=post>";

?>
<!--<p><label for="codDepto"><?php echo $dados[0];?></label><input id="codDepto" type="number" name="codDepto" value="<?php echo $codDepto; ?>"></p>-->
<?php
    for ($i = 0; $i < sizeof($dados);$i++){
        echo "<p><label for=$dados[$i]> $dados[$i]</label><br><input id=$dados[$i] type=text name=$dados[$i] value= '$valores[$i]' ></p>";
    }
?>

<input type="submit" value="Atualizar">
<br><br><input type="reset" value="Resetar">

</form>
</body>
</html>
