<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4352</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="encabezado">
        <div class="encabezado-title">
            <h1><span>4352.</span> BIT DE PARIDAD</h1>
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
                    <th>12.69</th>
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
                    Un bit de paridad es un dígito binario que indica si el número de bits
                    con un valor de 1 en un conjunto de bits es par o impar. Los bits de paridad
                    conforman el método de detección de errores más simple. Existen dos variantes
                    de este método:
                    <ul>
                        <li>Bit de paridad par</li>
                        <li>bit de paridad impar</li>
                    </ul>
                    En el caso de la paridad par, se cuentan el número de unos. Si el total es impar,
                    el bit de paridad se establece en uno y por tanto la suma del total anterior con
                    este bit de paridad, daría par. Si el conteo de bits uno es par, entonces el bit
                    de paridad se deja en 0, pues ya es par.
                    Escribe un programa que sirva para añadir un bit de paridad par a una secuencia de bits.
                </h3>
            </p>
            <div class="we">
                <h2>ENTRADA</h2>
            </div>
            <p>
                <h3>
                    La entrada consiste de una sola línea con una secuencia de siete bits
                    <span>0</span> o <span>1</span>.
                </h3>
            </p>
            <div class="we">
                <h2>SALIDA</h2>
            </div>
            <p>
                <h3>
                    La salida es la misma secuencia de siete bits de la entrada más el bit
                    de paridad par. Dicho bit de paridad se agrega al lado derecho.
                </h3>
            </p>
        </div>
        <div class="table-ejem">
            <table>
                <tr>
                    <td><h4>Entrada</h3></td>
                    <td><h4>Salida</h3></td>
                    <td><h4>Descripción</h4></td>
                </tr>
                <tr>
                    <td><h5>1010001</h5></td>
                    <td><h5>10100011</h5></td>
                    <th>
                        <h6>El número de bits con valor de 1 en la entrada es 3.<BR> 
                            La salida son los mismos siete bits de la entrada y se<BR>
                            añade un bit 1 para que en total el número de bits con<BR>
                            valor 1 sea par.
                        </h6>
                    </th>
                </tr>
                <tr>
                    <td><h5>1101001</h5></td>
                    <td><h5>11010010</h5></td>
                    <th>
                        <h6>El número de bits con valor de 1 en la entrada es 4.<BR>
                            La salida son los mismos siete bits de la entrada y<BR>
                            se añade un bit 0 para que en total el número de bits<BR>
                            con valor 1 se mantenga par.
                        </h6>
                    </th>
                </tr>
                <tr>
                    <td><h5>0000000</h5></td>
                    <td><h5>00000000</h5></td>
                    <th>
                        <h6>El número de bits con valor de 1 en la entrada es 0.<BR>
                            La salida son los mismos siete bits de la entrada y<BR>
                            se añade un bit 0 para que en total el número de bits<BR>
                            con valor 1 se mantenga par (cero es un número par).
                        </h6>
                    </th>
                </tr>
                <tr>
                    <td><h5>1111111</h5></td>
                    <td><h5>11111111</h5></td>
                    <th>
                        <h6>El número de bits con valor de 1 en la entrada es 7.<BR>
                            La salida son los mismos siete bits de la entrada y<BR>
                            se añade un bit 1 para que en total el número de bits<BR>
                            con valor 1 sea par.
                        </h6>
                    </th>
                </tr>
            </table>
        </div>
    </section>
    <section class="php-and-form">
        <div class="form">
            <h3>POR FAVOR INGRESA EL EL BIT DE PARIDAD:</h3>
            <form action="bit-de-paridad.php" method="post">
                <input type="text" name="txtPal">
                <input type="submit" value="Enviar">
            </form>
        </div>
        <div class="php">
            <?php
            if($_POST){ 
                $bit=$_POST['txtPal'];
                $t=strlen($bit);
                $z=0;
                echo "final: ";
                for($i=0;$i<$t;$i++){
                    if($bit[$i]==1){
                        $z++;
                    }
                }
                echo $bit;
                if($z%2==0){
                    echo "0";
                }
                else {echo "1";}
            }
            ?>
        </div>
    </section>
</body>
</html>