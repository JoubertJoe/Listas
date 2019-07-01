<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
</head>
<body>
<?php

$tabela = $_GET['tabela'];

#variaveis para armazenar os nomes dos campos
$dados;
$aux = 0;

if(!isset($tabela)){
    $tabela = "departamento";
}
    echo "<h1> LISTA 07 - PHP com MySQL - SELECT</h1>";
    include "sql.php";

    $sql = "select * from $tabela";
    $resultados = mysqli_query($conn, $sql);
    echo "<table>";
    echo "<tr>";
     //coletando os nomes dos campos da tabela consultada
     $campos = mysqli_fetch_fields($resultados);
     foreach($campos as $v){
         echo "<th>$v->name</th>";
         $dados[$aux] = $v->name;
         #echo $dados[$aux];
         $aux = $aux + 1;
     }
     echo "<th>Atualizar</th>";
     echo "<th>Remover</th>";
     echo "</tr>";

     $dados = htmlspecialchars(serialize($dados), ENT_QUOTES); 
     
     $sql = "SHOW TABLES FROM $bd";

     $result = mysqli_query($conn,$sql);
     
     if (!$result) {
         echo "DB Error, could not list tables\n";
         echo 'MySQL Error: ' . mysqli_error($conn);
         exit;
     }
     
     while ($row = mysqli_fetch_row($result)) {
         echo "<a href=?tabela=$row[0]>$row[0]</a> | ";
     }
     echo "<br><br>";
     mysqli_free_result($result);


    if(mysqli_num_rows($resultados)>0){
        //extraindo linha por linha dos resultados
        while($linha = mysqli_fetch_array($resultados, MYSQLI_NUM)){
           
            $string  = "<tr>";
            for($i = 0; $i <= sizeof($linha)-1 ;$i++){
                $string .= "<td>" . $linha[$i] . "</td>";
            }
            #$string .= "<td><a href='update.php?codDepto=" . $linha[0] . "&tabela=" . $tabela . "'";
            $string .= "<td><a href='update.php?id=" . $linha[0] . "&tabela=" . $tabela . "&dados=" . $dados . "'";
            $string .= "<i class='far fa-edit'></i></a></td>";
            $string .= "<td><a href='remover.php?id=" . $linha[0] . "&tabela=" . $tabela . "&dados=" . $dados . "'";
			$string .= "<i class='far fa-trash-alt'></i></a></td>";
            $string .= "</tr>";

            echo $string;
        }
    }else{
        echo "<p>Zero resultados!</p>";
    }
    
    echo "</table>";
   

    mysqli_close($conn);

    $string = "<a href='inserir.php?tabela=" . $tabela . "&dados=" . $dados . "'><p>Inserir na tabela $tabela<p></a>";

    echo $string;

?>
</body>
</html>