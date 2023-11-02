<?php
error_reporting(0);
session_start();
include "connection.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username = $_POST['username'];

    $password = $_POST['password'];

    $sql= "SELECT * FROM user WHERE username='".$username."' AND password='".$password."' ";


    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="student")
    {
        $_SESSION['username']=$username;

        $_SESSION['usertype']="student";

        header("location:studenthome.php");
    }
    elseif($row["usertype"]=="admin")
    {
        $_SESSION['username']=$username;

        $_SESSION['usertype']="admin";


        header("location:adminhome.php");
    }
    else{

        //echo "username or password do not match";
        $message= "username or password do not match";
        $_SESSION['loginmessage']=$message;

        header("location:login.php");

    }


}




?>