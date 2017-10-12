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
            $c1 = new Caneta("Bic", "Azul", 0.5);
            $c2 = new Caneta("Compact", "Preta", 0.7);
            
            echo "<br>";
            print "Caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
            echo "<br>";
            print "Caneta {$c2->getModelo()} de ponta {$c2->getPonta()}";
            
        ?>
        </pre>
    </body>
</html>