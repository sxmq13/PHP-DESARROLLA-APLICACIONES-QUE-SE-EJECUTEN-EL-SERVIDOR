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
            <h1><span>4352.</span> AUTORES</h1>
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
                    Los grandes descubrimientos científicos a menudo son nombrados por los apellidos
                    de los científicos que los hicieron. Por ejemplo, el sistema de criptografía asimétrica
                    más popular, RSA fue descubierto por Rivest, Shamir y Adleman. Otro ejemplo notable es el
                    algoritmo de Knuth-Morris-Pratt, nombrado por Knuth, Morris y Pratt. La referencia de
                    documentos científicos anteriores funciona mucho y es frecuente que un documento utilice
                    dos convenciones de nomenclatura diferentes: la variación corta (por ejemplo, KMP)
                    utilizando sólo las primeras letras de los autores y la larga variación (por ejemplo, Knuth-Morris-Pratt)
                    Apellidos completos separados por guiones. Encontramos que la mezcla de dos convenciones en
                    un papel es estéticamente desagradable y quisiera que usted escribiera un programa que transformara
                    variaciones largas en cortas.
                </h3>
            </p>
            <div class="we">
                <h2>ENTRADA</h2>
            </div>
            <p>
                <h3>
                    La primera y única línea de entrada contendrá como máximo 100 caracteres, letras mayúsculas
                    y minúsculas del alfabeto inglés y guión ('-' ASCII 45). El primer carácter siempre será una
                    letra mayúscula. Los guiones siempre serán seguidos por una letra mayúscula. Todos los demás
                    caracteres serán letras minúsculas.
                </h3>
            </p>
            <div class="we">
                <h2>SALIDA</h2>
            </div>
            <p>
                <h3>
                    La primera y única línea de salida debe contener la variación corta apropiada.
                </h3>
            </p>
        </div>
        <div class="table-er">
            <table>
                <tr>
                    <td><h4>Entrada</h3></td>
                    <td><h4>Salida</h3></td>
                </tr>
                <tr>
                    <td><h5>Knuth-Morris-Pratt</h5></td>
                    <td><h5>KMP</h5></td>
                </tr>
                <tr>
                    <td>Mirko-Slavko<h5></h5></td>
                    <td><h5>MS</h5></td>
                </tr>
                <tr>
                    <td><h5>Pasko-Patak</h5></td>
                    <td><h5>PP</h5></td>
                </tr>
            </table>
        </div>
    </section>
    <section class="php-and-form">
        <div class="forma">
            <h3>POR FAVOR INGRESA LOS NOMBRES DE LOS AUTORES SEPARANDOLOS CADA UN CON UN "-":</h3>
            <form action="AUTORES.php" method="post">
                <input type="text" name="txta">
                <input type="submit" value="Enviar">
        </div>
        <div class="php">
            <?php
                if($_POST)
                { 
                    $may=$_POST['txta'];
                    $cm=array();
                    $t=strlen($may);
                    echo "Abreviatura: ";
                    for($i=0;$i<$t;$i++)
                    {
                        if(ord($may[$i])>=65 and ord($may[$i])<=90)
                        {
                            echo $may[$i];
                        }
                    }
                }    
            ?>
        </div>
    </section>
</body>
</html>