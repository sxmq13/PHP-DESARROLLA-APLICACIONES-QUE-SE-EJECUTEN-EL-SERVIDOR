<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>7093</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body style="background-color: rgb(197, 197, 197); font-family:Verdana, Geneva, Tahoma, sans-serif;">
        <h1 style="text-align: center; background-color: #45624e;">7093. El lado más corto</h1>
        <ul id="menu">
            <li><a href="INDEXX.php">PANTALLA <br> PRINCIPAL</a></li>
            <li><a href="ejesieteuno.php">7050. CÁLCULOS CONDICIONALES</a></li>
            <li><a href="ejesietedos.php">18710.<br> FORMULOTA</a></li>
            <li><a href="ejesietetres.php">7093. EL LADO MÁS CORTO</a></li>
            <li><a href="ejesietecuatro.php">11338. ESCALERA DE ASTERISCOS</a></li>
        </ul>
        <h2 style="color: #6d8777;">descripción</h2>
        <p>
            <h3 style="text-align: left; color: #1a201cef;">
                Escribe un programa que, dadas las coordenadas de los vértices de un cuadrilátero,
                calcule la longitud de su lado más corto.
            </h3>
            <img src="imagenes/Captura de pantalla 2024-02-29 103722.png" alt="hola" width="300" height="200">
        </p>
        <h2 style="color: #6d8777;">entrada</h2>
        <p>
            <h3 style="text-align: left; color: #1a201cef;">
                Ocho reales x<span style="font-size: x-small;">1</span>, x<span style="font-size: x-small;">2</span>
                , x<span style="font-size: x-small;">3</span>, x<span style="font-size: x-small;">4</span>, 
                y<span style="font-size: x-small;">1</span>, y<span style="font-size: x-small;">2</span>,
                y<span style="font-size: x-small;">3</span>, y<span style="font-size: x-small;">4</span>.
                Puedes suponer que 0 &le; x<span style="font-size: x-small;">i</span>,
                y<span style="font-size: x-small;">i</span> &le; 100 y que los vértices se listan ordenados en el
                sentido de las manecillas del reloj.
            </h3>
        </p>
        <h2 style="color: #6d8777;">salida</h2>
        <p>
            <h3 style="text-align: left; color: #1a201cef;">
                n real que sea la longitud del lado más corto del cuadrilátero. Tu programa se considerará correcto
                si el valor calculado es razonablemente cercano a la respuesta exacta.
            </h3>
        </p>
        <h2 style="color: #6d8777;">ejemplos</h2>
        <table border="1" cellspacing="3" cellpadign="3" style="background-color: #e4e6d9; border: #273527 3px solid; font-style: italic;">
            <tr>
                <td style="background-color: #6d8777;"><h4>entrada</h4></td>
                <td style="background-color: #6d8777;"><h4>salida</h4></td>
            </tr>
            <tr>
                <td style="background-color: #c0cfb2;"><h5> <br>10.1 10.2 <br> 20.2 10.3 <br> 22.3 4.1 <br> 7.5 0.9</h5></td>
                <th style="text-align: left; background-color: #c0cfb2;"><h5>6.545991</h5></th>
            </tr>
        </table>
        <h3>---------------------------------------------------------------</h3>
        <form action="ejesietetres.php" method="post" style="border: #273527 2px solid; width: 200px; text-align: center;">
            numero 1:
            <input type="text" name="txtnum11" style="background-color: #c0cfb2; text-align:center; color: #1a201cef;"> <br>
            numero 2:
            <input type="text" name="txtnum22" style="background-color: #c0cfb2; text-align:center; color: #1a201cef;"> <br>
            numero 3:
            <input type="text" name="txtnum33" style="background-color: #c0cfb2; text-align:center; color: #1a201cef;"> <br>
            numero 4:
            <input type="text" name="txtnum4" style="background-color: #c0cfb2; text-align:center; color: #1a201cef;"> <br>
            numero 5:
            <input type="text" name="txtnum5" style="background-color: #c0cfb2; text-align:center; color: #1a201cef;"> <br>
            numero 6:
            <input type="text" name="txtnum6" style="background-color: #c0cfb2; text-align:center; color: #1a201cef;"> <br>
            numero 7:
            <input type="text" name="txtnum7" style="background-color: #c0cfb2; text-align:center; color: #1a201cef;"> <br>
            numero 8:
            <input type="text" name="txtnum8" style="background-color: #c0cfb2; text-align:center; color: #1a201cef;"> <br>
            <input type="submit" value="Enviar"> <br>
        </form>
        <h3>
            <?php
                if($_POST)
                {
                $x1=$_POST["txtnum11"];
                $y1=$_POST["txtnum22"];
                $x2=$_POST["txtnum33"];
                $y2=$_POST["txtnum4"];
                $x3=$_POST["txtnum5"];
                $y3=$_POST["txtnum6"];
                $x4=$_POST["txtnum7"];
                $y4=$_POST["txtnum8"];
        
                $c=sqrt(($x2-$x1)*($x2-$x1)+($y2-$y1)*($y2-$y1));
                $d=sqrt(($x3-$x2)*($x3-$x2)+($y3-$y2)*($y3-$y2));
                $f=sqrt(($x4-$x3)*($x4-$x3)+($y4-$y3)*($y4-$y3));
                $g=sqrt(pow($x1-$x4,2)+pow($y1-$y4,2));
                if($c<$d and $c<$f and $c<$g)
                {
                    echo round($c,6);
                }
                else if($d<$f and $d<$g)
                {
                    echo round($d,6);
                }
                else if($f<$g)
                {
                    echo round($f,6);
                }
                else
                {
                    echo round($g,6);
                }
                }
            ?>
        </h3>
    </body>
</html>