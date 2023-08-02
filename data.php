<?php
$title=$_POST['title'];
session_start();
$unqid=$_SESSION['unqid'];
include 'database.php';
$sql="INSERT INTO todos1(title,unqid)VALUES('$title','$unqid')";
$result=mysqli_query($conn, $sql);
if($result){
    header("location: ./index.php");
}
else{
    // echo "Sorry We Can't Connect";
}
?>