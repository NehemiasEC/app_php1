<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
    <form action="busqueda.php" method="get">
        <label for="Buscar">Buscar</label>
        <input type="text" name="Buscar" required>
        <input type="button" value="Dale" name="Enviando">
    </form>

    <?php
    /**
        header('Content-Type: charset=utf-8');
        require_once "conexion.php";


        $conexion=mysqli_connect($db_host,$db_user,$db_password);

        if((mysqli_connect_errno()))
        {
            echo "Error al intentar conectar a la base da datos";
            exit();
        }
        mysqli_select_db($conexion,$db_name);

        mysqli_set_charset($conexion,"UTF-8");

        $consulta="SELECT * FROM Hoja1 WHERE PAISDEORIGEN='ITALIA'";

        $resultados=mysqli_query($conexion,$consulta);


        while($fila=mysqli_fetch_assoc($resultados))
        {
            echo "<table><tr><td>";
            echo $fila['CODART']."</td><td>";
            echo $fila['SECCION']."</td><td>";
            echo $fila['NOMBREARTICULO']."</td><td>";
            echo "$". $fila['PRECIO']."</td><td>";
            echo $fila['PAISDEORIGEN']."</td><td></tr></table>";

        }
     * */


    ?>
    </body>
</html>