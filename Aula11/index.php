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
            require_once 'Aluno.php';
            require_once 'Visitante.php';
            require_once 'Professor.php';
            require_once 'Bolsista.php';
            require_once 'Tecnico.php';
            
            $v1 = new Visitante();
            $a1 = new Aluno();
            $b1 = new Bolsista();
            $t1 = new Tecnico();
            $p1 = new Professor();
            
            
            echo "<br>";
            print_r($v1);
            echo "<br>";
            print_r($a1);
            echo "<br>";
            print_r($b1);
            echo "<br>";
            print_r($t1);
            echo "<br>";
            print_r($p1);
        ?>
        </pre>
    </body>
</html>
