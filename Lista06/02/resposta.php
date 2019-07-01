<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>

    <style>
        h1 {
            background-color: dodgerblue;
            color: white;
            text-align: center;

        }

        p {
            color: white;
            text-align: center;
            font-family: "Comic Sans MS", cursive, sans-serif;
        }

        body {
            background-color: dodgerblue;
            text-align: center;
        }
    </style>
    <h1>Diferença entre datas: </h1>
    <?php

    $data = $_POST['data'];
    $hoje = date('d/m/y');


    // Strtotime transforma data em numero
    $dif = strtotime($hoje) - strtotime($data);  
    $dif = floor($dif / (60 * 60 * 24));
    
    if($dif <= 0){
        $dif = $dif* (-1);  
    }





    echo "<p>Data :$data</p>";
    echo "<p>Data :$hoje</p>";
    echo "<p>Diferença :$dif dias</p>";



    ?>
    </head>

    <body>

         </form>


    </body>


</html>