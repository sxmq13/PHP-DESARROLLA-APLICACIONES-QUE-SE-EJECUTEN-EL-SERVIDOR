<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro listo</title>
</head>
<style>
    :root
    {
        /*Colores*/
        --white: #e9e9e9;
        --gray: #333;
        --blue: #0367a6;
        --lightblue: #008997;

        /*Radii*/
        --button-radius: 0.7rem;

        /*Sizes*/
        --max-width: 758px;
        --max-height: 420px;
        
        font-size: 16px;
        font-family: cursive;
    }
    body{
        background-color: #a3bdf1;
    }
    .ve{
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-size: 4rem;
        font-family: cursive;
        color: #5e7f9d;
    }
    .btn
    {
        background-color: var(--blue);
        background-image: linear-gradient(90deg, var(--blue) 0%, var(--lightblue) 74%);
        border-radius: 20px;
        border: 1px solid var(--blue);
        color: var(--white);
        cursor: pointer;
        font-size: 0.8rem;
        font-weight: bold;
        letter-spacing: 0.1rem;
        padding: 0.9rem 4rem;
        text-transform: uppercase;
        transition: transform 80ms ease-in;
    }
    .btn:active
    {
        transform: scale(0.95);
    }
    .btn:focus
    {
        outline: none;
    }
    .btn1{
        color: var(--white);
        text-decoration: none;
    }
</style>
<body>
    <?php
        if ($_POST) {
            $nom = $_POST['Nombree'];
            $correo = $_POST['Correoo'];
            $user = $_POST['Usuarioo'];
            $contra = $_POST['Contarseñaa'];

            $conex = mysqli_connect("localhost", "root", "", "usuarios", "3306");

            $checkSql = "SELECT * FROM usuarios WHERE login = '$user' OR correo = '$correo'";
            $checkResult = mysqli_query($conex, $checkSql);

            if (mysqli_num_rows($checkResult) > 0) {
                echo "<h2 class='ve'> El usuario o correo ya existe. Por favor, intenta con otro. </h2>";
            } else {
                $consul = "INSERT INTO usuarios (password, login, correo, nombre) VALUES ('" . sha1($contra) . "', '$user', '$correo', '$nom')";
                if (mysqli_query($conex, $consul)) {
                    echo " <h2 class='ve'> Gracias por registrarse. </h2>";
                } else {
                    echo "Error: " . mysqli_error($conex);
                }
            }

            mysqli_close($conex);
        }
    ?>
    <center>
            <button class="btn"><a href="../login.html" target="_blank" class="btn1">Regresar al menu principal</a></button>
    </center>

    <script>
            history.replaceState(null,null,location.pathname);
    </script>
</body>
</html>