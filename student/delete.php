<?php
include ("../config.php");
$id= $_GET['id'];
$deleteQuery = "DELETE FROM student WHERE id = $id";
if(mysqli_query($conn, $deleteQuery)){
    echo"deleted";

}else{
    echo"Unable to delete";

}
header("Location:list.php");
?>