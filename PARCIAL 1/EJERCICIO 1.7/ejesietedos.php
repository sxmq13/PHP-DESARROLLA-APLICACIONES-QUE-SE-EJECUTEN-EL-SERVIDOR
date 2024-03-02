<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>18710</title>
      <link rel="stylesheet" href="estilo.css">
  </head>
  <body style="background-color: rgb(197, 197, 197); font-family:Verdana, Geneva, Tahoma, sans-serif;">
    <h1 style="text-align: center; background-color: #45624e;">18710. Formulota</h1>
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
        Diseñar un programa que pregunte los valores de las variables x,y,z y evalue la función f(x,y,z).
        <br> <br>
        <math xmlns="http://www.w3.org/1998/Math/MathML" display="block" style="text-align: center; font-family:Georgia, 'Times New Roman', Times, serif; font-size: 30px; color:#6d8777">
          <mi>f</mi>
          <mo>(</mo>
          <mi>x</mi>
          <mo>,</mo>
          <mi>y</mi>
          <mo>,</mo>
          <mi>z</mi>
          <mo>)</mo>
          <mo>=</mo>
          <mfrac>
            <mrow>
              <mfrac>
                <mrow>
                  <mi>x</mi>
                  <mo>+</mo>
                  <mi>y</mi>
                </mrow>
                <mrow>
                  <mn>2</mn>
                  <mi>x</mi>
                </mrow>
              </mfrac>
              <mo>+</mo>
              <mfrac>
                <mrow>
                  <msup><mi>x</mi><mn>3</mn></msup>
                  <mo>+</mo>
                  <msup><mi>y</mi><mn>3</mn></msup>
                </mrow>
                <mrow>
                  <msup><mi>x</mi><mn>2</mn></msup>
                  <mo>+</mo>
                  <msup><mi>y</mi><mn>2</mn></msup>
                </mrow>
              </mfrac>
            </mrow>
            <mrow>
              <msup><mi>x</mi><mn>2</mn></msup>
              <mo>+</mo>
              <msup><mi>y</mi><mn>2</mn></msup>
              <mo>+</mo>
              <msup><mi>z</mi><mn>2</mn></msup>
            </mrow>
          </mfrac>
        </math>    
      </h3>
    </p>
    <h2 style="color: #6d8777;">entrada</h2>
    <p>
      <h3 style="text-align: left; color: #1a201cef;">
        El programa pedirá tres números, uno por renglón, estos podrán ser positivos, negativos o cero, y pudieran tener decimales.
      </h3>
    </p>
    <h2 style="color: #6d8777;">salida</h2>
    <p>
      <h3 style="text-align: left; color: #1a201cef;">
        La respuesta, o salida a la consola, será el valor de la función f(x,y,z) redondeado a 6 decimales.<br>
        Nota: Se puede usar la función tofixed(numero,decimales) para ajustar la salida.
      </h3>
    </p>
    <h2 style="color: #146ea6ef;">ejemplos</h2>
    <table border="1" cellspacing="3" cellpadign="3"  style="background-color: #e4e6d9; border: #273527 3px solid; font-style: italic;">
      <tr>
        <td style="background-color: #6d8777;"><h4>entrada</h4></td>
        <td style="background-color: #6d8777";><h4>salida</h4></td>
      </tr>
      <tr>
        <td style="background-color: #c0cfb2;"><h5>1<br>2<br>3</h5></td>
        <th style="text-align: left; background-color: #c0cfb2;"><h5>0.235714</h5></th>
      </tr>
      <tr>
        <td style="background-color: #c0cfb2;"><h5>4<br>5<br>6</h5></td>
        <th style="text-align: left; background-color: #c0cfb2;"><h5>0.074477</h5></th>
      </tr>
      <tr>
        <td style="background-color: #c0cfb2;"><h5>7<br>8<br>9</h5></td>
        <th style="text-align: left; background-color: #c0cfb2;"><h5>0.044525</h5></th>
      </tr>
    </table>
    <h3>---------------------------------------------------------------</h3>
    <form action="ejesietedos.php" method="post" style="border: #273527 2px solid; width: 200px; text-align: center;">
      numero 1:
      <input type="text" name="txtnum1" style="background-color: #c0cfb2; text-align:center; color: #1a201cef;"> <br>
      numero 2:
      <input type="text" name="txtnum2" style="background-color: #c0cfb2; text-align:center; color: #1a201cef;"> <br>
      numero 3:
      <input type="text" name="txtnum3" style="background-color: #c0cfb2; text-align:center; color: #1a201cef;"> <br>
      <input type="submit" value="Enviar"> <br>
  </form>
    <h3>
      <?php
        if($_POST)
        {
          $x=$_POST["txtnum1"];
          $y=$_POST["txtnum2"];
          $z=$_POST["txtnum3"];

          $f1=($x+$y)/(2*$x);
          $f2=(pow($x,3)+pow($y,3))/(($x*$x)+($y*$y));
          $f3=($x*$x)+($y*$y)+($z*$z);
          $ft=($f1+$f2)/($f3);
          echo round($ft,6);
        }
      ?>
    </h3>
  </body>
</html>