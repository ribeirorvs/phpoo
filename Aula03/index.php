<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta();
            $c1->modelo = "Bic Cristal";
            $c1->cor = "Azul";
            var_dump($c1);
            print_r($c1);
        ?>
        </pre>
    </body>
</html>
