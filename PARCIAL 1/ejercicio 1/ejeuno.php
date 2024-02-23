<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>12662.C16</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body style="background-color: floralwhite; font-family:Verdana, Geneva, Tahoma, sans-serif;">
        <h1 style="text-align: center; background-color: blue;">12662.C16</h1>
        <h2 style="color: #146ea6ef;">descripcion</h2>
        <p>
            <h3 style="text-align: left;">
             OMIJal se ha encontrado con una variante en el Concurso ACM,pues
             el numero de programadores que conforman un equipo puede variar,
             entonces modifica tu programa anterior pues ahora deberás preguntar
             numero de 3 integrantes por equipo, al final indica cuantos pueden
             formarse y cuantos programadores quedan. <br>
            </h3>
        </p>
        <h2 style="color: #146ea6ef;">entrada</h2>
        <p>
            <h3 style="text-align: left;">
            Dos números que representen el número de programadores y
            el número de programadores por equipo.
            </h3>
        </p>
        <h2 style="color: #146ea6ef;">salida</h2>
        <p>
            <h3 style="text-align: left;">
            Salida con el número de equipos formados y los estudiantes
             sin equipo, escrito exactamente como en el ejemplo
            </h3>
        </p>
        <h2 style="color: #146ea6ef;">ejemplos</h2>

        <table border="1" cellspacing="3" cellpadign="3"  style="background-color: #5aabdeef; border: #2618a5 3px solid; font-style: italic;">
            <tr>
                <td><h4>entrada</h4></td>
                <td><h4>salida</h4></td>
            </tr>
            <tr>
                <td style="background-color: #5abbdeef;"><h5>5<br>4</h5></td>
                <th style="text-align: left; background-color: #5abbdeef;"><h5>Equipos formados: 1 <br>
                     Estudiantes sin equipo: 1</h5></th>
            </tr>
            <tr>
                <td style="background-color: #5abbdeef;"><h5>18<br>3</h5></td>
                <th style="text-align: left; background-color: #5abbdeef;"><h5>Equipos formados: 6 <br>
                        Estudiantes sin equipo: 0</h5></th>
            </tr>
        </table>
        <h3>--------------------------------------------------------</h3>
        <h3>
        <?php
            $a=5;
            $b=4;
            $c=18;
            $d=3;
            $uno=$a/$b;
            $unoo=$a%$b;
            echo "el primer ejemplo los resultados serian: <br> Equipos formados: ", $uno, "<br>Estudiantes sin equipo: ",$unoo;
            $dos=$c/$d;
            $doss=$c%$d;
            echo "<br>el segundo ejemplo los resultados serian: <br> Equipos formados: ", $dos, "<br>Estudiantes sin equipo: ",$doss;
        ?>
        </h3>
    </body>
</html>