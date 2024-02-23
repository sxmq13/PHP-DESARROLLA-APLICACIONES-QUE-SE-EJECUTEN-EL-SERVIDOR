<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>5630. Colegiatura</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body style="background-color: floralwhite; font-family:Verdana, Geneva, Tahoma, sans-serif;">
        <h1 style="text-align: center; background-color: blue;">5630. Colegiatura</h1>
        <h2 style="color: #146ea6ef;">descripcion</h2>
        <p>
            <h3 style="text-align: left;">
                La mamá de Esteban quiere inscribirlo en la mejor preparatoria de Cuernavaca,
                pero le preocupa cuanto vaya a pagar, y te pide ayuda para que hagas un programa
                que le diga cuanto tenga que pagar. El esquema que maneja la prepa es este:
                <BR>PLAN DE PAGOS:
                    <ul>
                        <li>La colegiatura de los alumnos se determina según el numero de materias que cursan.
                            El costo de cada una de las materias es de $1600.
                        </li>
                        <li>
                            Se ha establecido un programa para estimular a los alumnos, el cual consiste en lo siguiente:
                            si el promedio obtenido por un alumno en el ultimo periodo es mayor o igual que 9, se le hará
                            un descuento del 30% sobre la colegiatura y no se le cobrara IVA; si el promedio obtenido es
                            menor que 9 deberá pagar la colegiatura completa, mas el IVA del 16%.
                        </li>
                    </ul>
            </h3>
        </p>
        <h2 style="color: #146ea6ef;">entrada</h2>
        <p>
            <h3 style="text-align: left;">
                El numero de materias "A"que Esteban va a cursar. Y un numero con decimales "B"
                que es el promedio de Esteban.
            </h3>
        </p>
        <h2 style="color: #146ea6ef;">salida</h2>
        <p>
            <h3 style="text-align: left;">
                Un numero entero "C" con el precio a pagar. Debe de ir con un $.
            </h3>
        </p>
        <h2 style="color: #146ea6ef;">ejemplos</h2>
        <table border="1" cellspacing="3" cellpadign="3"  style="background-color: #5aabdeef; border: #2618a5 3px solid; font-style: italic;">
            <tr>
                <td><h4>entrada</h3></td>
                <td><h4>salida</h3></td>
            </tr>
            <tr>
                <td style="background-color: #5abbdeef;"><h5>5<br>9.6</h5></td>
                <th style="text-align: left; background-color: #5abbdeef;"><h5>$5600</h5></th>
            </tr>
            <tr>
                <td style="background-color: #5abbdeef;"><h5>8<br>7.8</h5></td>
                <th style="text-align: left; background-color: #5abbdeef;"><h5>$14848</h5></th>
            </tr>
            <tr>
                <td style="background-color: #5abbdeef;"><h5>2<br>8</h5></td>
                <th style="text-align: left; background-color: #5abbdeef;"><h5>$3712</h5></th>
            </tr>
        </table>
        <h3>--------------------------------------------------------</h3>
        <h3>
            <?php
                $a=5;
                $b=9.6;
                $c=$a*1600;
                if($b>=9)
                {
                    $d=$c*0.30;
                    $e=$c-$d;
                    echo "<br>el costo que pagara es de: ", $e;
                }
                else
                {
                    $f=$c*0.16;
                    $g=$c+$f;
                    echo "<br>el costo que pagara es de: ", $g;
                }
                $a=8;
                $b=7.8;
                $c=$a*1600;
                if($b>=9)
                {
                    $d=$c*0.30;
                    $e=$c-$d;
                    echo "<br>el costo que pagara es de: ", $e;
                }
                else
                {
                    $f=$c*0.16;
                    $g=$c+$f;
                    echo "<br>el costo que pagara es de: ", $g;
                }
                $a=2;
                $b=8;
                $c=$a*1600;
                if($b>=9)
                {
                    $d=$c*0.30;
                    $e=$c-$d;
                    echo "<br>el costo que pagara es de: ", $e;
                }
                else
                {
                    $f=$c*0.16;
                    $g=$c+$f;
                    echo "<br>el costo que pagara es de: ", $g;
                }
            ?>
        </h3>
    </body>
</html>