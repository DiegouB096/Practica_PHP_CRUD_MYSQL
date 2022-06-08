<?php include("db.php")?>

<?php include ("includes/header.php")?>

    <div class ="container p-4">
        <div class="row">
            <div class = "col-md-4">
                <div class = "card card-body"> 
                <h3> Agregar Tarea </h3>    
                    <form action="guardar.php" method="POST" class="p-4">
                        <div class = "form-group">
                            <label>Titulo: </label>
                            <input type="text" name="titulo" class="form-control" placeholder="titulo de mi tarea" autofocus>
                        </div>
                        <!--- Textarea -->
                        <div class = "form-group">
                        <label>Descripcion: </label>
                            <textarea type="descripcion" name="descripcion" class="form-control" placeholder="Descripcion de la Tarea" rows = "2"></textarea>
                        </div>
                        <!--- Botton -->
                        <input type="submit" class="save-tarea my-4" name = "guardar" value = "Guardar">

                    </form>
                </div>
            </div>
            <div class="col-md-8">
            <table class=table table-bordered>
                <thead>
                    <tr>
                        <th> TITULO </th>
                        <th> DESCRIPCION DE TAREA </th>
                        <th> FECHA DE CREACION </th>
                        <th> ACCIONES </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $query = "SELECT * FROM tareas";
                        $result = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result)){ ?>
                            <tr>
                                <td><?php echo $row['titulo'] ?> </td>
                                <td><?php echo $row['descripcion'] ?> </td>
                                <td><?php echo $row['fecha_creacion'] ?> </td>
                                <td>
                                    <a href="editar.php?id=<?php echo $row['id']?>">
                                        EDITAR
                                    </a>
                                    <br/>
                                    <a href="eliminar.php?id=<?php echo $row['id']?>">
                                        ELIMINAR
                                    </a> 
                                </td>
                            </tr>

                    <?php    } ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

<?php include ("includes/footer.php")?>

