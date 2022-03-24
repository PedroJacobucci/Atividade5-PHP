<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Distância entre 2 pontos</title>

        <link rel="stylesheet" href="styles3.css">

        <script>
            alert("Distância entre dois pontos")
        </script>
    </head>
        <body bgcolor="#FFFACD">
            <div id="primeiro">
                <h1>RA:8127726 - Nome: Pedro Henrique Jacobucci</h1>
                    <?php
                    $xa = 2.0;
                    $ya = 2.0;
                    $xb = 5.0;
                    $yb = 5.0;
                    $d = sqrt( (($xb-$xa)*($xb-$xa))+(($yb-$ya)*($yb-$ya)) );
                    $distancia = sprintf('%.2f', $d);
                    echo "A distância é: $distancia";
                    ?>
            </div>
        </body>
</html>