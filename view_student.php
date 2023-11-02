<?php

error_reporting(0);
session_start();
if(!isset($_SESSION['username']))
{
    //header("location:login.php");
}
elseif($_SESSION['usertype']=='student')
{
    //header("location:login.php");
}

include "connection.php";

$sql="SELECT * FROM `user` WHERE usertype='student'";
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
   
    <style type="text/css">
        .table_th{
            padding: 20px;
            font-size: 20px;
        }
        .table_td{
            padding: 20px;
            background-color: #eb87ad;



        }
        </style>
</head>
<body>

<?php
include "admin_sidebar.php";

?>


    <div class="content">
        <center>
        <h1>Student Data</h1>

        <?php

        if($_SESSION['message'])
        {
            echo $_SESSION['message'];
        }
        unset($_SESSION['message']);
        ?>
        <br><br>

        <table border="1px" width="50px">
            <tr>
                <th class="table_th">Username</th>
                <th class="table_th">Contact</th>
                <th class="table_th">Email</th>
                <th class="table_th">Password</th>
                <th class="table_th">Delete</th>
                <th class="table_th">Update</th>


            </tr>

              <?php
                 while($data=$result->fetch_assoc())
                 {

                 
              ?>

            <tr>
                <td class="table_td">
                    <?php echo "{$data['username']}";?>
                </td>
                <td class="table_td">
                <?php echo "{$data['contact']}";?>

                </td>
                <td class="table_td">
                <?php echo "{$data['email']}";?>

                </td>
                <td class="table_td">
                <?php echo "{$data['password']}";?>

                </td>
                <td class="table_td">
                <?php
                 echo "<a onClick=\" javascript:return confirm('Are Your sure to Delete this'); \"
                 class='btn btn-danger' href='delete.php?student_id={$data['id']}'>Delete</a>";
                 ?>

                </td>
                <td class="table_td">
                <?php echo "<a class='btn btn-success' 
                href='update_student.php?student_id={$data['id']}'>Update</a>";?>

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