<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Alumnos</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Icons -->
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
    <div  class="Container-fluid row">
        <form action="" method="post" class="col-4">
            <h3 class="titulo">Registro personas</h3>

            <div class="mb-3">
                <label for="txtmatricula" class="form-label">Matricula</label>
                <input type="text" class="form-control" name="matrii">
            </div>

            <button type="submit" class="btn btn-primary" name="btnBuscar" value="ok">Buscar</button>
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
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "modelo/conex.php";
                        if (isset($_POST["matrii"])) {
                            $matri = $_POST["matrii"];
                            $sql = $conex->query("SELECT * FROM alumnos WHERE matricula = '$matri'");
                            while ($datos = $sql->fetch_object()) {
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
                                        <a href="update.php?matricula=<?php echo $datos->matricula; ?>" class="btn btn-small btn-warning" target="_blank"><i class="fa-solid fa-pen-to-square"></i></a>
                                    </td>
                                    <td>
                                        <a href="jixsaw.php?matricula=<?php echo $datos->matricula; ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                    <?php
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        history.replaceState(null, null, location.pathname);
    </script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
