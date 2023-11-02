
<?php
include "connection.php";

session_start();

if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype']=='admin')
{
    header("location:login.php");
}


$username=$_SESSION['username'];

$sql="SELECT * FROM `user` WHERE username='$username' ";

$result=mysqli_query($conn,$sql);

$data=mysqli_fetch_assoc($result);

if(isset($_POST['update_profile']))
{
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $sql2="UPDATE userUPDATE `user` SET `id`='$id',`username`='$username',`contact`='$contact',`email`='$email',`usertype`='$usertype',`password`='password' WHERE username=$username";

    $result2=mysqli_query($conn,$sql2);
    if($result2)
    {
        echo "update success";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<style type="text/css">

    label{
        display:inline-block;
        text-align: right;
        width: 100px;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .div_deg{
        background: rgb(248,67,235);
    background: radial-gradient(circle, rgba(248,67,235,1) 11%, rgba(252,109,70,1) 70%);
    width: 400px;
    padding-top: 70px;
    padding-bottom: 70px;
    }
    </style>

</head>
<body>

<?php

include "student_sidebar.php";

?>

<div class="content">
    <center>
        <h1>Update Profile</h1>
        <br><br>
    <form>
        <div class="div_deg">
        <div>
            <label>Name</label>
            <input type="text" name="name" value="<?php echo "{$data['username']}" ?>">
</div>
<div>
            <label>Email</label>
            <input type="email" name="email" value="<?php echo "{$data['email']}" ?>">
</div>
<div>
            <label>phone</label>
            <input type="number" name="phone" value="<?php echo "{$data['phone']}" ?>">
</div>
<div>
            <label>password</label>
            <input type="text" name="password" value="<?php echo "{$data['password']}" ?>">
</div>
<div>
            <input type="submit" class="btn btn-primary" name="update_profile">
</div>
</div>

</form>
</center>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>