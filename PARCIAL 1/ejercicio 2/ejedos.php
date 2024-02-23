<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>12662.C16</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body style="background-color: floralwhite; font-family:Verdana, Geneva, Tahoma, sans-serif;">
        <h1 style="text-align: center; background-color: blue;">12655. C09</h1>
        <h2 style="color: #146ea6ef;">descripción</h2>
        <p>
            <h3 style="text-align: left;">
            Escribe un programa que solicite las calificaciones de Matemáticas, Español y Cocina y nos de su promedio.
            </h3>
        </p>
        <h2 style="color: #146ea6ef;">entrada</h2>
        <p>
            <h3 style="text-align: left;">
            Tres números reales.
            </h3>
        </p>
        <h2 style="color: #146ea6ef;">salida</h2>
        <p>
            <h3 style="text-align: left;">
            Un número real representado el promedio de los tres números.
            </h3>
        </p>
        <h2 style="color: #146ea6ef;">ejemplos</h2>

        <table border="1" cellspacing="3" cellpadign="3"  style="background-color: #5aabdeef; border: #2618a5 3px solid; font-style: italic;">
            <tr>
                <td><h4>entrada</h4></td>
                <td><h4>salida</h4></td>
            </tr>
            <tr>
                <td style="background-color: #5abbdeef;"><h5>10 9.5 9.0</h5></td>
                <th style="text-align: left; background-color: #5abbdeef;"><h5>9.5</h5></th>
            </tr>
        </table>
        <h3>---------------------------------------------------------------</h3>
        <h3>
        <?php
            $a=10;
            $b=9.5;
            $c=9.0;
            $prom=($a+$b+$c)/3;
            echo "el promedio de la persona de las materias matematicas, español y cocina es: ", $prom;
        ?>
        </h3>
    </body>
</html>