<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
 <style>
  table{
      border-collapse: collapse;
  }
  tr, td, th{
      border: 1px solid black;
      text-align: center;
  }
 </style>
</head>
<body>
<?php


$tabela = $_GET['tabela'];

if(!isset($tabela)){
    $tabela = "departamento";
}

    //mysqli (object oriented, procedural. mysql only)
    //PDO ()

    echo "<h1> LISTA 07 - Consultas</h1>";
    include "sql.php";

    $sql = "select * from $tabela";
    $resultados = mysqli_query($conn, $sql);
    echo "<table>";
    echo "<tr>";
     //coletando os nomes dos campos da tabela consultada
     $campos = mysqli_fetch_fields($resultados);
     foreach($campos as $v){
         echo "<th>$v->name</th>";     
     }
     echo "</tr>";

     
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
     mysqli_free_result($result);


    if(mysqli_num_rows($resultados)>0){
        //extraindo linha por linha dos resultados
        while($linha = mysqli_fetch_array($resultados, MYSQLI_NUM)){
           
            $string  = "<tr>";
           for($i = 0; $i <= sizeof($linha)-1 ;$i++){
            $string .= "<td>" . $linha[$i] . "</td>";
           }
            
            $string .= "</tr>";

            echo $string;
        }
    }else{
        echo "<p>Zero resultados!</p>";
    }
    
    echo "</table>";
   

    mysqli_close($conn);

?>
</body>
</html>

