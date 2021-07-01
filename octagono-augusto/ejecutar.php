<html>
<head>
    <title>Octágono rectángulo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $a = $_POST['a'];
        $p = $_POST['p'];
        $area = ($a) * ($p) / 2;
   
        echo"<h1 align='center'>Resultado</h1>";
        echo"<h2 align='center'>area: $area<h2>";
        echo "<a href='index.html'>Volver</a>";
        echo"<h2 align='center'>Estudiante: Augusto Urdaneta</h2>";
    ?>
</body>

</html>