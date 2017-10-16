<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Cachorro.php';
            
            $c = new Cachorro();
            
            $c->reagirDono(false);
            $c->reagirFrase("Olá");
            $c->emitirSom();
            $c->reagirHora(10, 00);
            $c->reagirIdadePeso(15, 20);
        ?>
        </pre>
    </body>
</html>
