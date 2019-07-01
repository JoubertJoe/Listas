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
    <h1>Contact Form: </h1>
    <?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $texto = $_POST['texto'];
    $termos = $_POST['termos'];
    echo "<p>Nome :$nome</p>";
    echo "<p>Email :$email</p>";
    echo "<p>Comentário:</p><p>$texto</p>";

    if (isset($termos)) {
        echo "<p>Aceitou os termos de condição</p>";
    }

    ?>
    </head>

    <body>

        </form>


    </body>


</html> 