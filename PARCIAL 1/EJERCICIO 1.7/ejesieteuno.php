<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>7050</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body style="background-color: rgb(197, 197, 197); font-family:Verdana, Geneva, Tahoma, sans-serif;">
        <h1 style="text-align: center; background-color: #45624e;">7050. Cálculos condicionales</h1>
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
                Eres muy bueno evaluando fórmulas y realizando cálculos directos, pero te cuesta trabajo
                decidir en qué situaciones se deben hacer qué operaciones. Un compañero te sugirió un ejercicio
                de cálculo mental que consiste en, dado un número inicial "N", realizar las siguientes
                operaciones en el orden indicado y con aritmética entera:
                <ol>
                    <li>Si el valor actual de "N" es par, divídelo entre 2. En caso contrario, súmale 1.</li>
                    <li>Si el valor actual de "N" tiene tres o más cifras, divídelo entre 100. Pero si tiene exactamente dos cifras, divídelo entre 10.</li>
                    <li>Si el valor actual de "N"es un múltiplo de tres, réstale uno.</li>
                </ol>
                Escribe un programa que te ayude a calcular el valor final de "N" y el número de veces que "N"
                fue modificado.
            </h3>
        </p>
        <h2 style="color: #6d8777;">entrada</h2>
        <p>
            <h3 style="text-align: left; color: #1a201cef;">
                Un entero "N". Puedes suponer que 1  &le; "N" &le; 1000
            </h3>
        </p>
        <h2 style="color: #6d8777;">salida</h2>
        <p>
            <h3 style="text-align: left; color: #1a201cef;">
                Dos enteros que correspondan con el valor final de "N" y el número de veces que "N" fue modificado respectivamente.
            </h3>
        </p>
        <h2 style="color: #6d8777;">ejemplos</h2>
        <table border="1" cellspacing="3" cellpadign="3"  style="background-color: #e4e6d9; border: #273527 3px solid; font-style: italic;">
            <tr>
                <td style="background-color: #6d8777;"><h4>entrada</h4></td>
                <td style="background-color: #6d8777;"><h4>salida</h4></td>
            </tr>
            <tr>
                <td style="background-color: #c0cfb2;"><h5>7</h5></td>
                <th style="text-align: left; background-color: #c0cfb2;"><h5>8 1</h5></th>
            </tr>
        </table>
        <h3>---------------------------------------------------------------</h3>
        <form action="ejesieteuno.php" method="post" style="border: #273527 2px solid; width: 200px; text-align: center;">
            numero:
            <input type="text" name="txtnum" style="background-color: #c0cfb2; text-align:left; color: #1a201cef;"> <br>
            <input type="submit" value="Enviar"> <br>
        </form>
        <h3>
            <?php
                if($_POST)
                {
                    $n=$_POST["txtnum"];
                    $c=0;
                    if ($n%2==0)
                    {
                        $n/=2;
                        $c++;    
                    }
                    else
                    {
                        $n+=1;
                        $c++;
                    }

                    if($n%3==0)
                    {
                        $n-=1;
                        $c++;
                    }
                    echo $n . " " . $c;
                }
            ?>
        </h3>
    </body>
</html>