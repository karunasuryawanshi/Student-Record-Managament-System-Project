<?php

include "connection.php";
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student')
{
    header("location:login.php");
}

$sql="SELECT * FROM `admission`";

$result=mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <?php
    //include "admin.css";
    ?>
</head>
<body>



   <?php
   include "admin_sidebar.php";
   ?>


    <div class="content">
        <center>
        <h1> Applied For Admission</h1>
        <br><br>




<table border="1px;" width="50%;">

  <tr>
    <th style="padding: 10px; font-size:15px;">Name</th>
    <th style="padding: 10px; font-size:15px;">Email</th>
    <th style="padding: 10px; font-size:15px;">Phone</th>
    <th style="padding: 10px; font-size:15px;">Address</th>
  </tr>

  <?php
  while($data=$result->fetch_assoc())
  {
  ?>
  <tr>
    <td style="padding: 10px;">
    <?php echo "{$data['name']}";?>
</td>
    <td style="padding: 10px;">
    <?php echo "{$data['email']}";?>

</td>
    <td style="padding: 10px;">
    <?php echo "{$data['phone']}";?>

</td>
    <td style="padding: 10px;">
    <?php echo "{$data['address']}";?>

</td>
  </tr>
  <?php
  }
  ?>
  
</table>
</center>


</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>