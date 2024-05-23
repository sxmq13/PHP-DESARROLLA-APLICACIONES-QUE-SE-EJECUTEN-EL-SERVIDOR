<?php
    if(!empty($_GET["matricula"]))
    {
        $matri = $_GET["matricula"];

        $sql = $conex->query("delete from alumnos where matricula = '$matri';");
        if($sql==1)
        {
            echo "<div class='alert alert-success'>Alumno eliminado correctamente</div>";
        }
        else{
            echo "<div class='alert alert-danger'>No se pudo eliminar</div>";
        }
?>

        <script>
            history.replaceState(null,null,location.pathname);
        </script>
        
<?php
    }
?>