<?php
    if(!empty($_POST["btnregistrar"]))
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

            $sql=$conex->query("insert into alumnos values ('$matri','$ape','$nom','$fena','$direc','$tel','$corr','$patu');");
            if($sql==1)
            {
                echo "<div class='alert alert-succes'>persona registrada correctamente</div>";
            }
            else
            {
                echo "<div class='alert alert-danger'>arror al registrar</div>";
            }
        }

        else
        {
            echo "<div class='alert alert-warning'>algunos de los campos esta vacio</div>";
        }
?>

        <script>
            history.replaceState(null,null,location.pathname);
        </script>
        
<?php
    }
?>