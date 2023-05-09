<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>

<br />

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <br />
            <div class="card">
                <div class="card-header">
                    Datos del producto
                </div>
                <div class="card-body">
                    <form action="carta.php" method="post">
                        Nombre del producto: <input class="form-control" type="text" name="nombre" id="">
                        <br />
                        Imagen del producto: <input class="form-control" type="file" name="archivo" id="">
                        <br />
                        <input class="btn btn-success" type="submit" value="Enviar producto">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th> Nombre </th>
                        <th>
                            Imagen
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            espagueti
                        </td>
                        <td>
                            Imagen.jpg
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("pie.php");?>