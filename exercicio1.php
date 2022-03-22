<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do círculo</title>
    
    <link rel="stylesheet" href="styles.css">
    
    <script>
        alert("Área do círculo")
    </script>
</head>
<body bgcolor="#D8BFD8">
    <div id="apresentacao">
        <h1>RA:8127726 - Nome: Pedro Henrique Jacobucci </h1>
    <?php
        $raio = 2.00; //raio do círculo
        $pi = 3.14159; //pi

        $area = $pi * ($raio * 2); //área do círculo
    
        printf ('Raio do círculo: %.2f ', number_format($raio, 2) );
        printf ('<br>Valor do pi: %f ', number_format($pi, 5) );

        printf ('<br>Área do círculo = %.4f', number_format($area, 4) );
    ?>
    </div>  
</body>
</html>