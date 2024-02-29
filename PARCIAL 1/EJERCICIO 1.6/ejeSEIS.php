<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>2765</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body style="background-color: floralwhite; font-family:Verdana, Geneva, Tahoma, sans-serif;">
        <h1 style="text-align: center; background-color: blue;">2765. Sumando dos conjuntos</h1>
        <h2 style="color: #146ea6ef;">descripción</h2>
        <p>
            <h3 style="text-align: left;">
                Dados dos conjuntos de enteros de tamaño N, imprimir el resultado de sumarlos. 1<=N<=100. Por ejemplo,
                <br>sea N=4:
                <br>2 3 4 5
                <br>6 7 1 3
                <br>El resultado de sumarlos es:
                <br>8 10 5 8
            </h3>
        </p>
        <h2 style="color: #146ea6ef;">entrada</h2>
        <p>
            <h3 style="text-align: left;">
                En la primera línea el entero N. En la segunda línea, separados por un espacio, los números del primer conjunto. En la tercera línea también separados por un espacio, los números del segundo conjunto.
            </h3>
        </p>
        <h2 style="color: #146ea6ef;">salida</h2>
        <p>
            <h3 style="text-align: left;">
                Los números resultantes de sumar ambos conjuntos, separados por un espacio.
            </h3>
        </p>
        <h2 style="color: #146ea6ef;">ejemplos</h2>

        <table border="1" cellspacing="3" cellpadign="3"  style="background-color: #5aabdeef; border: #2618a5 3px solid; font-style: italic;">
            <tr>
                <td><h4>entrada</h4></td>
                <td><h4>salida</h4></td>
            </tr>
            <tr>
                <td style="background-color: #5abbdeef;"><h5>4<br>2 3 4 5<br>6 7 1 3</h5></td>
                <th style="text-align: left; background-color: #5abbdeef;"><h5>8 10 5 8</h5></th>
            </tr>
        </table>
        <h3>---------------------------------------------------------------</h3>
        <h3>
        <?php
            $a=array(2,3,4,5);
            $b=array(6,7,1,3);
            $s=0;
            for($i=0;$i<4; $i++)
            {
                $s=$a[$i]+$b[$i];
                echo $s . " ";
                $s=0;
            }
        ?>
        </h3>
    </body>
</html>