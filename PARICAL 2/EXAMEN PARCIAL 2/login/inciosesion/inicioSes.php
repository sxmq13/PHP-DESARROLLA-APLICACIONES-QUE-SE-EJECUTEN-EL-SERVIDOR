<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<style>
    body{
        background-color: #a3bdf1;
    }
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
    <div class="bienvenida">
        <?php
            if($_POST)
            {
                $conex=mysqli_connect('localhost', 'root', '', 'usuarios', '3306');
                if(!$conex)
                {
                    die("no hay conexion" . mysqli_connect_error());
                }
            
                $user=$_POST['usuarioo'];
                $pass=$_POST['contarseñaa'];
            
                $consul = " select * from usuarios where login='$user' && password= sha1('$pass');";
                
                $resul=mysqli_query($conex, $consul);
                $nr = mysqli_num_rows($resul);
                
                if($nr == 0)
                {
                    echo "<h2 class='ve'>no ingreso </h2>";
        ?>
        <?php
                }
                else
                {
                    echo "<h2 class='ve'>bienvenido: " . $user . "</h2>";
        ?>
        <center>
            <button class="btn"><a href="CRUD/jixsaw.php" target="_blank" class="btn1">IR AL CRUD</a></button>
        </center>
        
        <?php
                }
            }
        ?>
    </div>
</body>
</html>
