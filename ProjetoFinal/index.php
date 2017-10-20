<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            require_once 'Visualizacao.php';
            
            $v[0] = new Video("Aula 1");
            $v[1] = new Video("Aula 2");
            $g[0] = new Gafanhoto("Eu", 28, "M", "login");
            
            $vis[0] = new Visualicao($g[0], $v[0]);
            $vis[0]->avaliar();
            $vis[1] = new Visualicao($g[0], $v[1]);
            $vis[1]->avaliarPorce(85);
            
            echo "<br>";
            print_r($v);
            echo "<br>";
            print_r($g);
            echo "<br>";
            print_r($vis);
        ?>
        </pre>
    </body>
</html>
