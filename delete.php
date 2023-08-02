<?php
session_start();
    include 'database.php';
    $id=$_GET['id'];
    $unqid=$_SESSION['unqid'];
    $sql="DELETE FROM todos1 WHERE id='$id' and unqid='$unqid'";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");
    }

?>