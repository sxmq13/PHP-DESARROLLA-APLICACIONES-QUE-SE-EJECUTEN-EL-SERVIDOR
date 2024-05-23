<?php

    if(!empty($_POST["btnmodificar"]))
    {
        if(!empty($_POST["matri"]) and !empty($_POST["ape"]) and 
            !empty($_POST["nombre"]) and !empty($_POST["fena"]) and 
            !empty($_POST["direc"]) and !empty($_POST["tel"]) and 
            !empty($_POST["correo"]) and !empty($_POST["patu"]))
        {
            $matri=$_POST["matri"];
            $ape=$_POST["ape"];
            $nom=$_POST["nombre"];
            $fena=$_POST["fena"];
            $direc=$_POST["direc"];
            $tel=$_POST["tel"];
            $corr=$_POST["correo"];
            $patu=$_POST["patu"];

            $sql= $conex->query("update alumnos set matricula = '$matri', Apellidos = '$ape', Nombre='$nom', Fecha_Nacimiento ='$fena', Direccion='$direc', Telefono = '$tel', correo = '$corr', Padre_o_tutor = '$patu' where matricula = '$matri' ;");

            if($sql==1)
            {
                header("location:jixsaw.php");
            }
            else
            {
                echo "<div class='alert alert-danger'> error al modificar </div>";
            }

        }
        else
        {
            echo "<div class='alert alert-warning'> campos vacíos </div>";
        }
?>

        <script>
            history.replaceState(null,null,location.pathname);
        </script>
        
<?php
    }

?>