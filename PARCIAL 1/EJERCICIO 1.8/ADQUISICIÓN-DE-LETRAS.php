<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4886</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="encabezado">
        <div class="encabezado-title">
            <h1><span>3991.</span> ADQUISICIÓN DE LETRAS</h1>
        </div>
        <div class="problems">
            <ul id="menu">
                <li><a href="indexi.php">PAGINA<br>PRINCIPAL</a></li>
                <li><a href="bit-de-paridad.php">4352. BIT<br>DE PARIDAD</a></li>
                <li><a href="AUTORES.php">4886.<br> AUTORES</a></li>
                <li><a href="ADQUISICIÓN-DE-LETRAS.php">3991. ADQUISICIÓN DE LETRAS</a></li>
            </ul>
        </div>
        <div class="table-omg">
            <table>
                <tr>
                    <td>Puntos</td>
                    <th>12.45</th>
                    <td>Límite de memoria</td>
                    <th>32 MiB</th>
                </tr>
                <tr>
                    <td>Límite de tiempo(casp)</td>
                    <th>1s</th>
                    <td>Límite de tiempo (total)</td>
                    <th>1m0s</th>
                </tr>
                <tr>
                    <td>Tamaño límite de entrada (bytes)</td>
                    <th>10KiB</th>
                </tr>
            </table>
        </div>
        <div class="indicaciones-ss">
            <h2>DESCRIPCIÓN</h2>
            <p>
                <h3>
                    En el ITAM, a los alumnos que estudian ingeniería les gusta comer letras.
                    A Miguel le encanta la letra "d" y quiere saber cuántas se va a poder comer
                    de un paquete que la escuela proporciona a todos sus alumnos.
                    El paquete que la escuela entrega es una palabra con letras minúsculas del alfabeto.
                </h3>
            </p>
            <div class="we">
                <h2>ENTRADA</h2>
            </div>
            <p>
                <h3>
                    Un solo string de letras minúsculas.
                </h3>
            </p>
            <div class="we">
                <h2>SALIDA</h2>
            </div>
            <p>
                <h3>
                    La cantidad de veces que aparece la letra favorita de Miguel.
                </h3>
            </p>
        </div>
        <div class="table-mc">
            <table>
                <tr>
                    <td><h4>Entrada</h3></td>
                    <td><h4>Salida</h3></td>
                </tr>
                <tr>
                    <td><h5>abcjdlllld</h5></td>
                    <td><h5>2</h5></td>
                </tr>
            </table>
        </div>
    </section>
    <section class="php-and-form">
        <div class="forme">
            <h3>POR FAVOR INGRESA LA CADENA DE CARACTERES:</h3>
            <form action="ADQUISICIÓN-DE-LETRAS.php" method="post">
                <input type="text" name="txtaq">
                <input type="submit" value="Enviar">
        </div>
        <div class="phph">
            <?php
                if($_POST)
                { 
                    $pal=$_POST['txtaq'];
                    $d=0;
                    $c=strlen($pal);
                    for($i=0;$i<$c;$i++)
                    {
                        if($pal[$i]=="d" or $pal[$i]=="D")
                        {
                            $d++;
                        }
                    }
        
                    echo "'d' en total: ",$d;
                }
            ?>
        </div>
    </section>
</body>
</html>