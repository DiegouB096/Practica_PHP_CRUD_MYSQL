<?php 
    include ("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM tareas WHERE id = $id";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Fallo en eliminar");
        }

        header("location: index.php");
    }

?>