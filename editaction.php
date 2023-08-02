<?php
 session_start();
       $id=$_POST['id'];
       $title=$_POST['title'];
      
       $unqid=$_SESSION['unqid'];
    include 'database.php';
    $sql="UPDATE todos1 SET title='$title' WHERE id='$id' and unqid='$unqid'";
    $result=mysqli_query($conn, $sql);

    if($result){
        header("location: ./index.php");
    }

?>