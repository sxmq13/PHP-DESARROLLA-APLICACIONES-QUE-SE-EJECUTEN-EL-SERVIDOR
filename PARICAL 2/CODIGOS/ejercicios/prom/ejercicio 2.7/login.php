<?php
    $conex = mysqli_connect('localhost', 'root', '', 'sistemas', '3306');
    if(!$conex)
    {
        die("no hay conexion" . mysqli_connect_error());
    }

    $user=$_POST["username"];
    $pass=$_POST["password"];

    $consul = " select * from usuarios where login='". $user . "' && password= sha1('" . $pass . "');";

    $resul=mysqli_query($conex, $consul);
    $nr = mysqli_num_rows($resul);

    if($nr == 0)
    {
       echo "no ingreso";
    }
    else
    {
        echo "bienvenido: " . $user;
    }
?>