<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ejercicio 6</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body style="background-color: floralwhite; font-family:Verdana, Geneva, Tahoma, sans-serif;">
        <h1 style="text-align: center; background-color: blue;">CALIFICACIONES DEL LOS ALUMNOS DEL CBTIS 217</h1>
        <h2 style="color: #146ea6ef;">descripción</h2>
        <p>
            <h3 style="text-align: left;">
                -Generar un arreglo de entre 1 y 1000 elementos.<br>
                -Cada uno de los elementos representa la calificación de todos los alumnos del CBTis  (va entre 0 y 10).<br>
                -Obtener el promedio de todas las calificaciones (2 decimales)<br>
                -Obtener la cantidad de alumnos que tienen calificaciones mayores o iguales al promedio.<br>
                -Indicar la cantidad y porcentaje de alumnos reprobados.<br>
                -Indicar la cantidad y porcentaje de alumnos aprobados.<br>
                -Calcular la desviación estándar de todos los números.<br>
                -Imprimir todos los números generados en una tabla HTML  de 30 columnas de ancho y los renglones que sean necesarios.<br>
            </h3>
        </p>
        <h3>------------------------------------------------------------------------------------------------------------------------------</h3>
        <h3>
            <?php
            $cal=array();
            $x=rand(1,1000);
            for ($i=1; $i<=$x ; $i++)
            {
                array_push($cal, rand(0,10));
            }
            #RELLENAR EL ARREGLO CON EL RAND.
            $prom=0;
            for($i=0; $i<$x; $i++)
            {
                $prom=$prom+$cal[$i];
            }
            $prom=$prom/$x;
            echo "el promedio es: ". round($prom,2). "<br>";
            #SACANDO EL PROMEDIO DE LAS CALAFIVICACIONES CON DOS DECIMALES.
            echo "calificaciones iguales o mayores al promedio: ";
            for($i=0; $i<$x; $i++)
            {
                if($cal[$i]>=$prom)
                {
                    echo $cal[$i]. ", ";
                }
            }
            echo "<br>";
            #SACANDO LAS CALIFICACIONES MAYORES O IGUALES AL PROMEDIO
            $apro=0;
            $contuno=0;
            $repro=0;
            $contdos=0;
            for($i=0; $i<$x; $i++)
            {
                if($cal[$i]<6)
                {
                    $contdos++;
                    $repro=$repro+$cal[$i];
                }
                else
                {
                    $contuno++;
                    $apro=$apro+$cal[$i];
                }
            }
            $apro=($apro/$x)*100;
            $repro=($repro/$x)*100;
            echo "alumnos reprobrados: "."total de alumnos: ". $contdos.",porcentaje: ".round($repro,2). "<br>";
            echo "alumnos aprobados: "."total de alumnos: ". $contuno.",porcentaje: ".round($apro,2). "<br>";
            #CANTIDAD DE ALUMNOS REPROBADOS Y APROBADOS.
            $suma=0;
            for($i=0; $i<$x; $i++)
            {
                $suma=$suma+abs(($cal[$i]-$prom)*($cal[$i]-$prom));
            }
            $div=$suma/$x;
            $raiz=sqrt($div);
            echo "desviación estandar: ". round($raiz,2), "<br>";
            #SACANDO LA DESVIACIÓN ESTANDAR.

            echo "<table border='1' cellspacing='3' cellpadign='3'  style='background-color: #5aabdeef; border: #2618a5 3px solid; font-style: italic;text-align: center;'>";

            for($i=0; $i<$x; $i++)
            {
                if($i%30==0)
                {
                    echo "<tr>";
                }
                else
                {
                    echo "<th  style='text-align: left; background-color: #5abbdeef;'>". $cal[$i]. "</th>";
                }
            }
            echo "</tr>";

            echo "</table>";
            #DATOS INICIALES DE LAS CALIFICACIONES ORDENADAS EN UNA TABLA.
            ?>
        </h3>
    </body>
</html>