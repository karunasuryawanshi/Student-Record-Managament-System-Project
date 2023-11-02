

<?php
include "connection.php";
$id=$_GET['student_id'];

$sql="SELECT * FROM `user` WHERE id='$id' ";

$result=mysqli_query($conn,$sql);

$data=$result->fetch_assoc();



if(isset($_POST['update'])){
    $username=$_POST['username'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="UPDATE `user` SET `id`='$id',`username`='$username',`contact`='$contact',`email`='$email',`usertype`='$usertype',`password`='$password' WHERE id='$id'";

    $result2=mysqli_query($conn,$sql);

    if($result2)
    {
        //echo "updated successfully";
        header("location:view_student.php");
    }
}




session_start();
if(!isset($_SESSION['username']))
{
    //header("location:login.php");
}
elseif($_SESSION['usertype']=='student')
{
   // header("location:login.php");
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
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .div_deg{
            background-color: skyblue;
            width: 400px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
        </style>

</head>
<body>

<?php
include "admin_sidebar.php";

?>


    <div class="content">
        <center>
        <h1>Update Student</h1>
        <div class="div_deg">
            <form action="#" method="POST">
                <div>
                    <label>Username</label>
                    <input type="text" name="name"
                    value="<?php echo "{$data['username']}"; ?>">
</div>
<div>
                    <label>Contact</label>
                    <input type="number" name="contact"
                    value="<?php echo "{$data['contact']}"; ?>">
</div>
<div>
                    <label>Email</label>
                    <input type="email" name="email" 
                    value="<?php echo "{$data['email']}"; ?>">
</div>
<div>
                    <label>Password</label>
                    <input type="text" name="password"
                    value="<?php echo "{$data['password']}"; ?>">
</div>
<div>
                    <input type="submit" class="btn btn-success" name="update" value="update">
</div>

</form>
</div>
</center>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>