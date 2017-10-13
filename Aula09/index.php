<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Livro.php';
            
            $p = array();
            
            $p[0] = new Pessoa("Pedro", 22, "M");
            $p[1] = new Pessoa("Maria", 31, "F");
            
            $l = array();
            
            $l[0] = new Livro("PHP Basico", "Jose", 300, $p[0]);
            $l[1] = new Livro("POO com PHP", "Maria", 500, $p[0]);
            $l[2] = new Livro("PHP avançado", "Ana Paula", 800, $p[1]);
            
            print_r($l[0]);
            $l[1]->detalhes();
            
            
            
        ?>
        </pre>
    </body>
</html>
