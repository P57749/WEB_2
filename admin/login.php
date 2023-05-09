<?php
session_start();
if($_POST){
    if(($_POST['usuario']=="Pepe") && ( $_POST['contrasena']=="12345")  ){
        $_SESSION['usuario']="Pepe";
        header("location:admin.php");


    }else{
        echo"<script> alert('usuario o contrasena incorrecto');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class=" container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <br />
                <br />
                <div class="card">

                    <div class="card-header">
                        Inicar sesión
                    </div>
                    <div class="card-body">

                        <form action="login.php" method="post">
                            Usuario: <input class="form-control" type=" text" name="usuario" id="">
                            <br />
                            Contrsena: <input class="form-control" type="password" name="contrasena" id="">
                            <br />
                            <button class="btn btn-success" type=" submit">entrar</button>
                        </form>

                    </div>
                    <div class="card-footer text-muted">

                    </div>
                </div>




            </div>
            <div class="col-md-4">

            </div>
        </div>

    </div>
    <script src="js/bootstrap.main.js"></script>
</body>
<html>


</html>