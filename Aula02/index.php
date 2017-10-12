<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta();
            $c1->cor = "Azul";
            $c1->ponta = 0.5;
            $c1->tampada = false;
            $c1->tampar();
            $c1->destampar();
            print_r($c1);
            
            $c2 = new Caneta();
            $c2->cor = "Verde";
            $c2->carga = 50;
            $c2->tampar();
            print_r($c2);
            
        ?>
    </body>
</html>
