<?php
    include "modelo/conex.php";
    $matricula = $_GET["matricula"];
    
    $sql=$conex->query("select * from alumnos where matricula = '$matricula';");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Datos</title>
    <!-- boostarp -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- icons -->
    <script src="https://kit.fontawesome.com/d77eb6ca90.js" crossorigin="anonymous"></script>
</head>
<style>
    body{
        background-color: #a3bdf1;
    }
</style>
<body>
    
    <div  class="Container-fluid row">
        <form action="" method="post" class="col-4">
            <h3 class="titulo">Modificar Datos</h3>
            <?php
                include "controlador/update.php";
                while($datos=$sql->fetch_object()){
            ?>

            <div class="mb-3">
                <input type="hidden"  class="form-control" name="matri" value="<?= $datos->matricula ?>">
            </div>

            <div class="mb-3">
                <label for="txtApellidos" class="form-label">Apellidos</label>
                <input type="text"  class="form-control" name="ape" value="<?= $datos->Apellidos ?>">
            </div>

            <div class="mb-3">
                <label for="txtNombre" class="form-label">Nombre</label>
                <input type="text"  class="form-control" name="nombre" value="<?= $datos->Nombre ?>">
            </div>

            <div class="mb-3">
                <label for="txtfechnac" class="form-label">Fecha De nacimiento</label>
                <input type="text" class="form-control" name="fena" value="<?= $datos->Fecha_Nacimiento ?>">
                <div class="form-text">Empezando con el año/mes/dia (0000-00-00)</div>
            </div>

            <div class="mb-3">
                <label for="txtDireccion" class="form-label">Dirreción</label>
                <input type="text"  class="form-control" name="direc" value="<?= $datos->Direccion ?>">
            </div>

            <div class="mb-3">
                <label for="txtTelefono" class="form-label">Teléfono</label>
                <input type="text"  class="form-control" name="tel" value="<?= $datos->Telefono ?>">
                <div class="form-text">solamente 10 digitos</div>
            </div>

            <div class="mb-3">
                <label for="txtCorreo" class="form-label">Correo</label>
                <input type="email"  class="form-control" name="correo" value="<?= $datos->correo ?>">
            </div>

            <div class="mb-3">
                <label for="txtmatricula" class="form-label">Padre/Tutor</label>
                <input type="text" class="form-control" name="patu" value="<?= $datos->Padre_o_tutor ?>">
                <div class="form-text">Apellido Paterno, Materno y Nombre</div>
            </div>

            <?php
                }
            ?>

            

            <button type="submit" class="btn btn-primary" name="btnmodificar" value ="ok">Modificar</button>

        </form>
    </div>


    <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>