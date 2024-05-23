<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD php</title>
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
    <?php
        include "modelo/conex.php";
    ?>
    <div class="Container-fluid row">
        <form action="" method="post" class="col-4">
            <h3 class="titulo">Registro Alumnos</h3>
            <?php
                include "controlador/insert.php";
            ?>

            <div class="mb-3">
                <label for="txtMatricula" class="form-label">Matriula</label>
                <input type="text" class="form-control" name="matri">
            </div>

            <div class="mb-3">
                <label for="txtApellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="ape">
            </div>

            <div class="mb-3">
                <label for="txtNombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>

            <div class="mb-3">
                <label for="txtFechanaci" class="form-label">Fecha De nacimiento</label>
                <input type="text" class="form-control" name="fena">
                <div class="form-text">Empezando con el año/mes/dia (0000-00-00)</div>
            </div>

            <div class="mb-3">
                <label for="txtDireccion" class="form-label">Dirreción</label>
                <input type="text" class="form-control" name="direc">
            </div>

            <div class="mb-3">
                <label for="txtTelefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" name="tel">
                <div class="form-text">solamente 10 digitos</div>
            </div>

            <div class="mb-3">
                <label for="txtCorreo" class="form-label">Correo</label>
                <input type="email" class="form-control" name="correo">
            </div>

            <div class="mb-3">
                <label for="txtPadre/Tutor" class="form-label">Padre/Tutor</label>
                <input type="text" class="form-control" name="patu">
                <div class="form-text">Apellido Paterno, Materno y Nombre</div>
            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" value ="ok">Registar</button>

        </form>
        <?php
           include "controlador/delete.php";
        ?>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">Matricula</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Fecha De nacimiento</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Padre/Tutor</th>
                        <th></th>
                        <th><a href="select.php" class="btn btn-small btn-success" target="_blank"><i class="fa-solid fa-magnifying-glass"></i></a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "modelo/conex.php";
                        $sql= $conex->query("SELECT * FROM alumnos;");
                        while($datos=$sql->fetch_object())
                        {
                    ?>
                     <tr>
                        <td><?php echo $datos->matricula; ?></td>
                        <td><?php echo $datos->Apellidos; ?></td>
                        <td><?php echo $datos->Nombre; ?></td>
                        <td><?php echo $datos->Fecha_Nacimiento; ?></td>
                        <td><?php echo $datos->Direccion; ?></td>
                        <td><?php echo $datos->Telefono; ?></td>
                        <td><?php echo $datos->correo; ?></td>
                        <td><?php echo $datos->Padre_o_tutor; ?></td>
                        <td>
                            <a href="update.php?matricula=<?php echo $datos->matricula ?>" class="btn btn-small btn-warning" target="_blank"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td>
                            <a href="jixsaw.php?matricula=<?php echo $datos->matricula ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>

                    <?php
                        }
                    ?>               
                </tbody>
            </table>
        </div>
    </div>

    <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>