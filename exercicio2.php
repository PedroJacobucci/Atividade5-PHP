<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média boletim</title>

    <link rel="stylesheet" href="styles2.css">

    <script>
        alert("Média de um estudante de computação")
    </script>

</head>
<body bgcolor="#FFFACD">
    <div id="media">
        <h1>RA:8127726 - Nome: Pedro Henrique Jacobucci</h1>
    <?php
       $peso1 = 3.5;
       $peso2 = 7.5;
       $p1 = 5.0 * $peso1;
       $p2 = 7.1 * $peso2;

       $media = ($p1 + $p2) / ($peso1 + $peso2);

       printf ('Nota P1 com peso: %.1f ', number_format($p1, 1) );
       printf ('<br>Nota P2 com peso: %.1f ', number_format($p2, 1) );

       printf ('<br>Média: %.5f ', number_format($media, 5) );
    ?>
    </div>
</body>
</html>