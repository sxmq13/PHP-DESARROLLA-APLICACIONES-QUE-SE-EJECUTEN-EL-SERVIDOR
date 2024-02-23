<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ejercicios</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body style="background-color: floralwhite; font-family:Verdana, Geneva, Tahoma, sans-serif;">
        <h1 style="text-align: center; background-color: blue;">113433.Estaciones del año</h1>
        <h2 style="color: #146ea6ef;">descripción</h2>
        <p>
            <h3 style="text-align: left;">
                Brithany quiere combinar la programación con el inglés, y se encuentra empezando a usar las estructuras de control
                selectivas en la programación estructurada, como ejercicio necesita desarrollar un programa que sea capaz de especificar
                a que estación (su nombre en inglés) del año pertenece una fecha en especifico compuesta por un día "d" y un mes "m" según
                lo siguiente:
                <ul>
                    <li>Winter del 21 de diciembre al 20 de marzo</li>
                    <li>Spring del 21 de marzo al 21 de junio</li>
                    <li>Summer del 22 de junio al 22 de septiembre</li>
                    <li>Fall del 23 de septiembre al 20 de diciembre</li>
                </ul>
                Considerando la siguiente cantidad de días para cada mes:
                <ul>
                    <li>Enero, Marzo, Mayo, Julio, Agosto, Octubre y Diciembre 31 días</li>
                    <li>Abril, Junio, Septiembre y Noviembre 30 días</li>
                    <li>Febrero 28 días</li>
                    <li>Cualquier fecha fuera de estos rangos debe considerarse como no existente</li>
                </ul>
            </h3>
        </p>
        <h2 style="color: #146ea6ef;">entrada</h2>
        <p>
            <h3 style="text-align: left;">
            Dos números enteros "d"y "m"separados por un espacio que corresponden al día y mes de una fecha determinada
            </h3>
        </p>
        <h2 style="color: #146ea6ef;">salida</h2>
        <p>
            <h3 style="text-align: left;">
            Una cadena "S" que indique la estación del año a la que pertenece la fecha ingresada o un mensaje que indique no existe la fecha, si la fecha no es válida
            </h3>
        </p>
        <h2 style="color: #146ea6ef;">ejemplos</h2>

        <table border="1" cellspacing="3" cellpadign="3"  style="background-color: #5aabdeef; border: #2618a5 3px solid; font-style: italic;">
            <tr>
                <td><h4>entrada</h4></td>
                <td><h4>salida</h4></td>
            </tr>
            <tr>
                <td style="background-color: #5abbdeef;"><h5>15 10</h5></td>
                <th style="text-align: left; background-color: #5abbdeef;"><h5>Fall</h5></th>
            </tr>
            <tr>
                <td style="background-color: #5abbdeef;"><h5>22 3</h5></td>
                <th style="text-align: left; background-color: #5abbdeef;"><h5>Spring</h5></th>
            </tr>
            <tr>
                <td style="background-color: #5abbdeef;"><h5>31 4</h5></td>
                <th style="text-align: left; background-color: #5abbdeef;"><h5>no existe la fecha</h5></th>
            </tr>
        </table>
        <h3>---------------------------------------------------------------</h3>
        <h3>
        <?php
            $d=15;
            $m=10;
            if($d>28 and $m==2 and $m > 12 or $d > 31 or $m <1 and $d<1)
            {
                echo "<br>no existe la fecha";
            }
            else if ($d>=21 and $d<=31 and $m==12)
            {
                echo "<br>winter ❄";
            }
            elseif($d>=1 and $d<=31 and $m==1)
            {
                echo "<br>winter ❄";
            }
            elseif($d>=1 and $d<=28 and $m==2)
            {
                echo "<br>winter ❄";
            }
            elseif($d>=1 and $d<=20 and $m==3)
            {
                echo "<br>Winter ❄";
            }
            elseif($d>=21 and $d<=31 and $m==3)
            {
                echo "<br>Spring 🌺";
            }
            elseif($d>=1 and $d<=30 and $m==4)
            {
                echo "<br>Spring 🌺";
            }
            elseif($d>=1 and $d<=31 and $m==5)
            {
                echo "<br>Spring 🌺";
            }
            elseif($d>=1 and $d<=21 and $m==6)
            {
                echo "<br>Spring 🌺";
            }
            elseif($d<=22 and $d>=30 and $m==6)
            {
                echo "<br>Summer ☀";
            }
            elseif($d>=1 and $d<=31 and $m==7)
            {
                echo "<br>Summer ☀";
            }
            elseif($d>=1 and $d<=31 and $m==8)
            {
                echo "<br>Summer ☀";
            }
            elseif($d>=1 and $d<=22 and $m==9)
            {
                echo "<br>Summer ☀";
            }
            elseif($d<=23 and $d>=30 and $m==9)
            {
                echo "<br>Fall 🍁";
            }
            elseif($d>=1 and $d<=31 and $m==10)
            {
                echo "<br>Fall 🍁";
            }
            elseif($d>=1 and $d<=30 and $m==11)
            {
                echo "<br>Fall 🍁";
            }
            elseif($d>=1 and $d<=20 and $m==12)
            {
                echo "<br>Winter ❄";
            }
            else
            {
                echo "<br>no existe la fecha";
            }
        
            $d=22;
            $m=3;
            if($d>28 and $m==2 and $m > 12 or $d > 31 or $m <1 and $d<1)
            {
                echo "<br>no existe la fecha";
            }
            else if ($d>=21 and $d<=31 and $m==12)
            {
                echo "<br>winter ❄";
            }
            elseif($d>=1 and $d<=31 and $m==1)
            {
                echo "<br>winter ❄";
            }
            elseif($d>=1 and $d<=28 and $m==2)
            {
                echo "<br>winter ❄";
            }
            elseif($d>=1 and $d<=20 and $m==3)
            {
                echo "<br>Winter ❄";
            }
            elseif($d>=21 and $d<=31 and $m==3)
            {
                echo "<br>Spring 🌺";
            }
            elseif($d>=1 and $d<=30 and $m==4)
            {
                echo "<br>Spring 🌺";
            }
            elseif($d>=1 and $d<=31 and $m==5)
            {
                echo "<br>Spring 🌺";
            }
            elseif($d>=1 and $d<=21 and $m==6)
            {
                echo "<br>Spring 🌺";
            }
            elseif($d<=22 and $d>=30 and $m==6)
            {
                echo "<br>Summer ☀";
            }
            elseif($d>=1 and $d<=31 and $m==7)
            {
                echo "<br>Summer ☀";
            }
            elseif($d>=1 and $d<=31 and $m==8)
            {
                echo "<br>Summer ☀";
            }
            elseif($d>=1 and $d<=22 and $m==9)
            {
                echo "<br>Summer ☀";
            }
            elseif($d<=23 and $d>=30 and $m==9)
            {
                echo "<br>Fall 🍁";
            }
            elseif($d>=1 and $d<=31 and $m==10)
            {
                echo "<br>Fall 🍁";
            }
            elseif($d>=1 and $d<=30 and $m==11)
            {
                echo "<br>Fall 🍁";
            }
            elseif($d>=1 and $d<=20 and $m==12)
            {
                echo "<br>Winter ❄";
            }
            else
            {
                echo "<br>no existe la fecha";
            }

            $d=31;
            $m=4;
            if($d>28 and $m==2 and $m > 12 or $d > 31 or $m <1 and $d<1)
            {
                echo "<br>no existe la fecha";
            }
            else if ($d>=21 and $d<=31 and $m==12)
            {
                echo "<br>winter ❄";
            }
            elseif($d>=1 and $d<=31 and $m==1)
            {
                echo "<br>winter ❄";
            }
            elseif($d>=1 and $d<=28 and $m==2)
            {
                echo "<br>winter ❄";
            }
            elseif($d>=1 and $d<=20 and $m==3)
            {
                echo "<br>Winter ❄";
            }
            elseif($d>=21 and $d<=31 and $m==3)
            {
                echo "<br>Spring 🌺";
            }
            elseif($d>=1 and $d<=30 and $m==4)
            {
                echo "<br>Spring 🌺";
            }
            elseif($d>=1 and $d<=31 and $m==5)
            {
                echo "<br>Spring 🌺";
            }
            elseif($d>=1 and $d<=21 and $m==6)
            {
                echo "<br>Spring 🌺";
            }
            elseif($d<=22 and $d>=30 and $m==6)
            {
                echo "<br>Summer ☀";
            }
            elseif($d>=1 and $d<=31 and $m==7)
            {
                echo "<br>Summer ☀";
            }
            elseif($d>=1 and $d<=31 and $m==8)
            {
                echo "<br>Summer ☀";
            }
            elseif($d>=1 and $d<=22 and $m==9)
            {
                echo "<br>Summer ☀";
            }
            elseif($d<=23 and $d>=30 and $m==9)
            {
                echo "<br>Fall 🍁";
            }
            elseif($d>=1 and $d<=31 and $m==10)
            {
                echo "<br>Fall 🍁";
            }
            elseif($d>=1 and $d<=30 and $m==11)
            {
                echo "<br>Fall 🍁";
            }
            elseif($d>=1 and $d<=20 and $m==12)
            {
                echo "<br>Winter ❄";
            }
            else
            {
                echo "<br>no existe la fecha";
            }
        ?>
        </h3>
        <h2>-------------------------------------------------------------------------------------------------------------------</h2>
        <h1 style="text-align: center; background-color: blue;">C. El mayor de tres números</h1>
        <h2 style="color: #146ea6ef;">descripción</h2>
        <p>
            <h3 style="text-align: left;">
            Realiza un problema que imprima el mayor de tres números.
            </h3>
        </p>
        <h2 style="color: #146ea6ef;">entrada</h2>
        <p>
            <h3 style="text-align: left;">
            Escribe tres números enteros a, b y c. 
            </h3>
        </p>
        <h2 style="color: #146ea6ef;">salida</h2>
        <p>
            <h3 style="text-align: left;">
            El número entero mayor de los tres números introducidos.
            </h3>
        </p>
        <h2 style="color: #146ea6ef;">ejemplos</h2>

        <table border="1" cellspacing="3" cellpadign="3"  style="background-color: #5aabdeef; border: #2618a5 3px solid; font-style: italic;">
            <tr>
                <td><h4>entrada</h4></td>
                <td><h4>salida</h4></td>
            </tr>
            <tr>
                <td style="background-color: #5abbdeef;"><h5>10<br>8<br>-7<br></h5></td>
                <th style="text-align: left; background-color: #5abbdeef;"><h5>10</h5></th>
            </tr>
            <tr>
                <td style="background-color: #5abbdeef;"><h5>10<br>81<br>101</h5></td>
                <th style="text-align: left; background-color: #5abbdeef;"><h5>101</h5></th>
            </tr>
            <tr>
                <td style="background-color: #5abbdeef;"><h5>11<br>11<br>11</h5></td>
                <th style="text-align: left; background-color: #5abbdeef;"><h5>11</h5></th>
            </tr>
            <tr>
                <td style="background-color: #5abbdeef;"><h5>10<br>810<br>101</h5></td>
                <th style="text-align: left; background-color: #5abbdeef;"><h5>810</h5></th>
            </tr>
        </table>
        <h3>---------------------------------------------------------------</h3>
        <h3>
        <?php
            $a=10;
            $b=81;
            $c=101;
            if($a>=$b and $a>=$c)
            {
                echo "<br>el numero mayor de este ejemplo es de : ", $a;
            }
            elseif($b>=$a && $b>=$c)
            {
                echo "<br>el numero mayor de este ejemplo es de : ", $b;
            }
            elseif($c>=$a && $c >=$b)
            {
                echo "<br>el numero mayor de este ejemplo es de : ", $c;
            }
            $a=10;
            $b=8;
            $c=-7;
            if($a>=$b and $a>=$c)
            {
                echo "<br>el numero mayor de este ejemplo es de : ", $a;
            }
            elseif($b>=$a && $b>=$c)
            {
                echo "<br>el numero mayor de este ejemplo es de : ", $b;
            }
            elseif($c>=$a && $c >=$b)
            {
                echo "<br>el numero mayor de este ejemplo es de : ", $c;
            }
            $a=11;
            $b=11;
            $c=11;
            if($a>=$b and $a>=$c)
            {
                echo "<br>el numero mayor de este ejemplo es de : ", $a;
            }
            elseif($b>=$a && $b>=$c)
            {
                echo "<br>el numero mayor de este ejemplo es de : ", $b;
            }
            elseif($c>=$a && $c >=$b)
            {
                echo "<br>el numero mayor de este ejemplo es de : ", $c;
            }
            $a=10;
            $b=810;
            $c=101;
            if($a>=$b and $a>=$c)
            {
                echo "<br>el numero mayor de este ejemplo es de : ", $a;
            }
            elseif($b>=$a && $b>=$c)
            {
                echo "<br>el numero mayor de este ejemplo es de : ", $b;
            }
            elseif($c>=$a && $c >=$b)
            {
                echo "<br>el numero mayor de este ejemplo es de : ", $c;
            }
        ?>
        </h3>

        <h2>-------------------------------------------------------------------------------------------------------------------</h2>
        <h1 style="text-align: center; background-color: blue;">B. ¿Cuántos valen 7?</h1>
        <h2 style="color: #146ea6ef;">descripción</h2>
        <p>
            <h3 style="text-align: left;">
            Escribe un programa que lea dos enteros e imprima cuántos de ellos valen "7".
            </h3>
        </p>
        <h2 style="color: #146ea6ef;">entrada</h2>
        <p>
            <h3 style="text-align: left;">
            Dos enteros en el rango de "-1000" "+1000"
            </h3>
        </p>
        <h2 style="color: #146ea6ef;">salida</h2>
        <p>
            <h3 style="text-align: left;">
            La cantidad de enteros iguales a 7.
            </h3>
        </p>
        <h2 style="color: #146ea6ef;">ejemplos</h2>

        <table border="1" cellspacing="3" cellpadign="3"  style="background-color: #5aabdeef; border: #2618a5 3px solid; font-style: italic;">
            <tr>
                <td><h4>entrada</h4></td>
                <td><h4>salida</h4></td>
            </tr>
            <tr>
                <td style="background-color: #5abbdeef;"><h5>-3<br>8<br></h5></td>
                <th style="text-align: left; background-color: #5abbdeef;"><h5>0</h5></th>
            </tr>
            <tr>
                <td style="background-color: #5abbdeef;"><h5>7<br>57</h5></td>
                <th style="text-align: left; background-color: #5abbdeef;"><h5>1</h5></th>
            </tr>
            <tr>
                <td style="background-color: #5abbdeef;"><h5>62<br>7</h5></td>
                <th style="text-align: left; background-color: #5abbdeef;"><h5>1</h5></th>
            </tr>
            <tr>
                <td style="background-color: #5abbdeef;"><h5>7<br>7</h5></td>
                <th style="text-align: left; background-color: #5abbdeef;"><h5>2</h5></th>
            </tr>
        </table>
        <h3>---------------------------------------------------------------</h3>
        <h3>
        <?php
            $a=-3;
            $b=8;
            if ($a==7&&$b==7)
            {
              echo "<br>el mayor de estos numeros de este ejemplo es: a y b (2) ";
            }
            else if ($a<7&&$b==7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: b (1) ";
            }
            else if($a>7&&$b==7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: b (1) ";
            }
            else if($a==7&&$b<7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: a (1) ";
            }
            else if($a==7&&$b>7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: a (1) ";
            }
            else if($a<7&&$b<7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: ninguno (0) ";
            }
            else if($a<7&&$b>7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: ninguno (0) ";
            }
            $a=7;
            $b=57;
            if ($a==7&&$b==7)
            {
              echo "<br>el mayor de estos numeros de este ejemplo es: a y b (2) ";
            }
            else if ($a<7&&$b==7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: b (1) ";
            }
            else if($a>7&&$b==7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: b (1) ";
            }
            else if($a==7&&$b<7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: a (1) ";
            }
            else if($a==7&&$b>7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: a (1) ";
            }
            else if($a<7&&$b<7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: ninguno (0) ";
            }
            else if($a<7&&$b>7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: ninguno (0) ";
            }
            $a=62;
            $b=7;
            if ($a==7&&$b==7)
            {
              echo "<br>el mayor de estos numeros de este ejemplo es: a y b (2) ";
            }
            else if ($a<7&&$b==7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: b (1) ";
            }
            else if($a>7&&$b==7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: b (1) ";
            }
            else if($a==7&&$b<7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: a (1) ";
            }
            else if($a==7&&$b>7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: a (1) ";
            }
            else if($a<7&&$b<7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: ninguno (0) ";
            }
            else if($a<7&&$b>7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: ninguno (0) ";
            }
            $a=7;
            $b=7;
            if ($a==7&&$b==7)
            {
              echo "<br>el mayor de estos numeros de este ejemplo es: a y b (2) ";
            }
            else if ($a<7&&$b==7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: b (1) ";
            }
            else if($a>7&&$b==7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: b (1) ";
            }
            else if($a==7&&$b<7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: a (1) ";
            }
            else if($a==7&&$b>7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: a (1) ";
            }
            else if($a<7&&$b<7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: ninguno (0) ";
            }
            else if($a<7&&$b>7)
            {
                echo "<br>el mayor de estos numeros de este ejemplo es: ninguno (0) ";
            }
        ?>
        </h3>
    </body>
</html>