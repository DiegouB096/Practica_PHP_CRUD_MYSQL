<?php
     
    include("db.php");

    if(isset($_POST['guardar'])){
        $titulo= $_POST['titulo'];
        $descripcion = $_POST['descripcion'];


        $query = "INSERT INTO tareas(titulo, descripcion) VALUES ('$titulo', '$descripcion')";

        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Fallo la consulta");
        }

        header("Location: index.php");
    }

?>