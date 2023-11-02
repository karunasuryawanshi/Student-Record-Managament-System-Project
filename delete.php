<?php
include "connection.php";
session_start();

if($_GET['student_id'])
{
    $id=$_GET['student_id'];

    $sql="DELETE FROM `user` WHERE id='$id' ";

    $result=mysqli_query($conn,$sql);

    if($result)
    {   
        $_SESSION['message']='student record  is deleted Successfully';
        header("location:view_student.php");
    }
}
?>