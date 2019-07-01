<html>
<head>
<style>
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
</head>
<body>
<?php
include "conexao.php";

$tabela = $_GET['tabela'];

$dados = unserialize($_GET['dados']);
$campos = base64_encode(serialize($dados));

echo "<form action=inserirregistro.php?tabela=$tabela&dados=$campos method=post>";


for ($i = 0; $i < sizeof($dados); $i++) {
    echo "<p><label for=$dados[$i]> $dados[$i]<br></label><input id=$dados[$i] type=text name=$dados[$i]></p>";
}

$sql = "INSERT INTO " . $tabela . " VALUES(";
for ($i = 0; $i < sizeof($dados); $i++) {
    if ($i == sizeof($dados) - 1) {
        $sql .= $dados[$i] . ")";
    } else {
        $sql .= $dados[$i] . ", ";
    }
}

echo "<br>";

echo "<p><input type=submit value=Inserir><br><br><input type=reset value=Limpar></p>";
echo "</form>";



echo $campos[2];

?>
        
    </body>
</html>