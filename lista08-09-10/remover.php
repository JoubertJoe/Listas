<html>
<head>
  <meta charset="utf-8">
</head>
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
<body>
<?php


include "conexao.php";
    #include "aula07.php";
$id = $_GET['id'];
echo "<p>ID: " . $id . "</p>";
$tabela = $_GET['tabela'];
echo "<p>Tabela: " . $tabela . "</p>";

$dados = unserialize($_GET['dados']);

$sql = "select * from " . $tabela . " where $dados[0] = " . $id;
    #echo $sql;

$resultados = mysqli_query($conn, $sql);

$valores;
if (mysqli_num_rows($resultados) > 0) {
        //extraindo linha por linha dos resultados
    while ($linha = mysqli_fetch_array($resultados, MYSQLI_NUM)) {
        for ($i = 0; $i < sizeof($linha); $i++) {
            $valores[$i] = $linha[$i];
        }
    }
} else {
    echo "<p>Não foram encontrados resultados!</p>";
}

$sql = "DELETE FROM $tabela WHERE ";
for ($i = 0; $i < sizeof($dados); $i++) {
    if ($i == sizeof($dados) - 1) {
        if (is_numeric($valores[$i])) {
            $sql .= $dados[$i] . " = " . $valores[$i];
        } else {
            $sql .= $dados[$i] . " = '" . $valores[$i] . "'";
        }
    } else {
        if (is_numeric($valores[$i])) {
            $sql .= $dados[$i] . " = " . $valores[$i] . " AND ";
        } else {
            $sql .= $dados[$i] . " = '" . $valores[$i] . "' AND ";
        }
    }
}

echo $sql;

$campos = base64_encode(serialize($dados));
echo "<form action=apagarregistro.php?tabela=$tabela&dados=$campos method=post>";

for ($i = 0; $i < sizeof($dados); $i++) {
    echo "<p><label for=$dados[$i]> $dados[$i]</label><input id=$dados[$i] type=text name=$dados[$i] value= '$valores[$i]' readonly></p>";
}
?>

<p><input type="submit" value="Deletar"></p>

</form>
</body>
</html>
