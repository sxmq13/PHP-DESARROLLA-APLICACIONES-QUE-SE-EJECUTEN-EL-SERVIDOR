<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>11338</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body style="background-color: rgb(197, 197, 197); font-family:Verdana, Geneva, Tahoma, sans-serif;">
        <h1 style="text-align: center; background-color: #45624e;">11338. Escalera de asteriscos</h1>
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
                Inés quiere llegar a su casa, pero accidentalmente, los arquitectos construyeron
                la puerta demasiado alta. Tu misión es ayudar a Inés a subir a su casa construyendo
                una escalera de longitud y altura "N" hecha de asteriscos.
            </h3>
        </p>
        <h2 style="color: #6d8777;">entrada</h2>
        <p>
            <h3 style="text-align: left; color: #1a201cef;">
                Se te darán como valor de entrada un numero entero "N" el cuál representa la longitud y altura de la escalera.
            </h3>
        </p>
        <h2 style="color: #6d8777;">salida</h2>
        <p>
            <h3 style="text-align: left; color: #1a201cef;">
                Deberás imprimir como salida una escalera de dimensiones "N" de largo y "N" de alto.
            </h3>
        </p>
        <h2 style="color: #6d8777;">ejemplos</h2>
        <table border="1" cellspacing="3" cellpadign="3" style="background-color: #e4e6d9; border: #273527 3px solid; font-style: italic;">
            <tr>
                <td style="background-color: #6d8777;"><h4>entrada</h4></td>
                <td style="background-color: #6d8777;"><h4>salida</h4></td>
            </tr>
            <tr>
                <td style="background-color: #c0cfb2;"><h5>2</h5></td>
                <th style="text-align: left; background-color: #c0cfb2;"><h5>#<br>##</h5></th>
            </tr>
            <tr>
                <td style="background-color: #c0cfb2;"><h5>5</h5></td>
                <th style="text-align: left; background-color: #c0cfb2;"><h5>#<br>##<br>###<br>####<br>#####</h5></th>
            </tr>
            <tr>
                <td style="background-color: #c0cfb2;"><h5>1</h5></td>
                <th style="text-align: left; background-color: #c0cfb2;"><h5>#</h5></th>
            </tr>
            <tr>
                <td style="background-color: #c0cfb2;"><h5>3</h5></td>
                <th style="text-align: left; background-color: #c0cfb2;"><h5>#<br>##<br>###<br>####</h5></th>
            </tr>
        </table>
        <h3>---------------------------------------------------------------</h3>
        <form action="ejesietecuatro.php" method="post" style="border: #273527 2px solid; width: 200px; text-align: center;">
            numero:
            <input type="text" name="txtnumm" style="background-color: #c0cfb2; text-align:center; color: #1a201cef;"> <br>
            <input type="submit" value="Enviar"> <br>
        </form>
        <h3>
            <?php
                if($_POST)
                {
                    $x=$_POST["txtnumm"];
                    for($i=1; $i<=$x; $i++)
                    {
                        echo str_repeat("#",$i) . "<br>";
                    }
                }
            ?>
        </h3>
    </body>
</html>