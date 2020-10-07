<?php
    ini_set('display_errors', 1); 
    ini_set('display_startup_errors', 1); 
    error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define("SENHA_DATABASE","123456");

        include "titulo.php";

        if (true)
            echo "ok";

        (true)?"ok":"falsa";

        $nomes["nome"] = "Marcondes";
        $nomes["nome_filha"] = "Leticia";
        $nomes["sobrenome"] = "Maçaneiro";
        $nomes["cidade"] = "Rio do Sul";

        echo "<br/>";
        var_dump($nomes);
        echo "<br/>";

        $keys = array_keys($nomes);
        echo "<br/>";
        var_dump($keys);
        echo "<br/>";

        for ($i=0; $i < count($keys); $i++) { 
            echo "O valor é: {$nomes[$keys[$i]]}<br/>";
        }
    ?>

    <hr />
        <?php
            print_r($_GET);

            include "{$_GET['pagina']}.php";
        ?>
    <hr />

    <?php //depende de configuração no php.ini ShortOpenTag => <?
        echo 'Marcondes Maçaneiro';
        $object = $_SERVER;
        error_log( print_r( $object, true ) );
    ?>
</body>
</html>