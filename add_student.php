
<?php

session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student')
{
    header("location:login.php");
}


include "connection.php";

if(isset($_POST['add_student']))
{
    $username=$_POST['name'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $usertype="student";
    
    //check user data already inserted or not
    $check="SELECT * FROM `user` WHERE username= '$username' ";

    $check_user=mysqli_query($conn,$check);

    $row_count=mysqli_num_rows($check_user);

    if($row_count==1)
    {
        echo " <script type='text/javascript'>
        alert('Username Already exist. Try another username');
        </script";
    }
    else{
        
        
    $sql="INSERT INTO `user`(`id`, `username`, `contact`, `email`, `usertype`, `password`) VALUES ('','$username','$contact','$email','$usertype','$password')";

    $result=mysqli_query($conn,$sql);

    if($result){
        echo "Data Uploaded Successfully";

        echo " <script type='text/javascript'>
       alert('Data Uploaded Successfully');
        </script";
    }
    else{
        echo "Upload Failed";
    }
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
        <h1>Add Student</h1>

        <div class="div_deg">
            <form action="#" method="POST">
                <div>
                    <label>Username</label>
                    <input type="text" name="name">
</div>
<div>
                    <label>Contact</label>
                    <input type="number" name="contact">
</div>
<div>
                    <label>Email</label>
                    <input type="email" name="email">
</div>
<div>
                    <label>Password</label>
                    <input type="text" name="password">
</div>
<div>
                    <input type="submit" class="btn btn-primary" name="add_student" value="Add Student">
</div>

</form>
</div>
    </center>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>