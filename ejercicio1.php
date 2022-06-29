<?php
    class Libro {
        public $titulo = "UML";
        public $autor = " Grady Booch";
        public $editorial = "McGraw-Hill";
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio1 - PHP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php
        $libro1 = new Libro();
    ?>
    <h1>
        <?php echo 'Libro: ' . $libro1->titulo; ?>
    </h1>
    <h2>
        <?php echo 'Autor: ' . $libro1->autor; ?>
    </h2>
    <h3>
        <?php echo 'Editorial: ' . $libro1->editorial; ?>
    </h3>
</body>
</html>