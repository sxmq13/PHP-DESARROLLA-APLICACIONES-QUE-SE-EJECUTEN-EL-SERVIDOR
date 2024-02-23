<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12618. Practicando con formulas</title>
</head>
<body style="background-color: floralwhite; font-family:Verdana, Geneva, Tahoma, sans-serif;">
    <h1 style="text-align: center; background-color: #146ea6ef;">12618. Practicando con formulas</h1>
    <h2 style="color: #146ea6ef;">Descripción</h2>
    <p>
        <h3 style="text-align: left;">Dado un valor real "a",
             quieres resolver una serie de ecuaciones hasta obtener el valor de "z".</h3>
    </p>
    <table style="text-align: center;">
        <tr>
            <h3 style="text-align: center; border-bottom: #146ea6ef 2px solid; width: 200px; font-family:Georgia, 'Times New Roman', Times, serif";>x=3a+15</h2>
        </tr>
        <tr>
            <h3 style="text-align: center; border-bottom: #146ea6ef 2px solid; width: 200px; font-family:Georgia, 'Times New Roman', Times, serif;">y=x+3/x+1</h2>
        </tr>
        <tr>
            <h3 style="text-align: center; border-bottom: #146ea6ef 2px solid; width: 200px; font-family:Georgia, 'Times New Roman', Times, serif;">z=5x+7y/axy</h2>
        </tr>
    </table>
    <h2 style="color: #146ea6ef;">Entrada</h2>
    <p>
        <h3 style="text-align: left;">Un real "a" Puedes suponer que 1 &le; a &le; 100</h3>
    </p>
    <h2 style="color: #146ea6ef;">Salida</h2>
    <p>
        <h3 style="text-align: left;">Un real que sea el valor de "z" impreso con tres puntos decimales.</h3>
    </p>
    <h2 style="color: #146ea6ef;">Ejemplos</h2>
    <table border="1" cellspacing="3" cellpadign="3"  style="background-color: #5aabdeef; border: #2618a5 3px solid; font-style: italic;">
        <tr>
            <td><h4>entrada</h3></td>
            <td><h4>salida</h3></td>
        </tr>
        <tr>
            <td style="background-color: #5abbdeef;"><h5>33.562</h5></td>
            <th style="text-align: left; background-color: #5abbdeef;"><h5>0.148</h5></th>
        </tr>
        <tr>
            <td style="background-color: #5abbdeef;"><h5>72.569</h5></td>
            <th style="text-align: left; background-color: #5abbdeef;"><h5>0.069</h5></th>
        </tr>
        <tr>
            <td style="background-color: #5abbdeef;"><h5>64.835</h5></td>
            <th style="text-align: left; background-color: #5abbdeef;"><h5>0.077</h5></th>
        </tr>
    </table>
    <h3>----------------------------------------------------------------------------------------</h3>
    <h3>
        <?php
            $a=33.662;
            $x=(3*$a)+(15);
            $y=($x+3)/($x+1);
            $z=(5*$x+7*$y)/($a*$x*$y);
            echo "el valor de este ejemplo de z es: ", round($z,3);
            $a=72.569;
            $x=(3*$a)+(15);
            $y=($x+3)/($x+1);
            $z=(5*$x+7*$y)/($a*$x*$y);
            echo "<br>el valor de este ejemplo de z es: ", round($z,3);
            $a=64.835;
            $x=(3*$a)+(15);
            $y=($x+3)/($x+1);
            $z=(5*$x+7*$y)/($a*$x*$y);
            echo "<br>el valor de este ejemplo de z es: ", round($z,3);
        ?>
    </h3>
</body>
</html>