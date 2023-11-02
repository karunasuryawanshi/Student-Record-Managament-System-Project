<?php
session_start();
include "connection.php";




if(isset($_POST['apply']))
{
   $name=$_POST['name'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   $address=$_POST['address'];

   $sql="INSERT INTO `admission`(`id`, `name`, `email`, `phone`, `address`) VALUES ('','$name','$email','$phone','$address')";

   $result=mysqli_query($conn,$sql);

   if($result)
   {
    //echo "Apply Success";
    $_SESSION['message']="your application send successful";
    header("location:index.php");

   }
   else
   {
    echo "Apply Failed";
   }
}
?>