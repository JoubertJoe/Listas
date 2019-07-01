<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
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
        //mysqli (object oriented, procendural. mysql only)
        //PDO ()

        //echo "<h1>PHP com MySQL - Procedural</h1>";
        //mysqli procedural
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $bd = "empresax";

        //abrindo a conexão
        $conn = mysqli_connect($servidor, $usuario, $senha, $bd);

        //testando a conexão
        if($conn){
        }else{

            die("Conexão não realizada!" . mysqli_connect_error());
            
        }

        //fechando a conexão
        //mysqli_close($conn);

    ?>
</body>
</html>