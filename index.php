<?php
error_reporting(0);
session_start();
session_destroy();


if($_SESSION['message'])
{
  $message=$_SESSION['message'];
  echo "<script type='text/javascript'> 
  alert('$message');
  </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>



<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img src="download.png" width="230" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Admission</a>
        </li>


    </ul>
      <form action="login.php" method="POST" class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

        <button class="btn btn-outline-success" type="submit">Login</button>
      </form>
    </div>
  </div>
</nav>

<!--<div class="section1">
  <img class="main_img" src="https://media.istockphoto.com/id/1413375076/photo/minimal-style-modern-white-classroom-with-blue-chairs-3d-render.jpg?s=2048x2048&w=is&k=20&c=kUP-IEIaP79q2uB2FyEWmSkkwZn0vd_54UEOLJ2ysQo=">
</div>-->

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="smiling-students-talking-during-lesson.jpg" class="d-block w-100" height="400" alt="...">

     <!-- <img src="https://img.freepik.com/premium-photo/sideview-groupmates-looking-camera-during-lesson_7502-1108.jpg?size=626&ext=jpg&ga=GA1.1.1680537862.1686629565&semt=ais" class="d-block w-100" height="400" alt="">-->
    </div>
    <div class="carousel-item">
      <!--<img src="https://as2.ftcdn.net/v2/jpg/03/98/40/81/1000_F_398408157_McCktDBclnNQ1VPPTO03kQF9eZRG80SL.jpg" height="400" width="1500" alt="...">-->
      <img src="html-system-website-concept.jpg" class="d-block w-100" height="400" alt="...">

    </div>
    <div class="carousel-item">
      <img src="brainstorm-meeting.jpg" class="d-block w-100" height="400" alt="...">
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <!--<img class="img1" src="https://www.predragacademy.in/uploads/system/about_predrag.png">-->
      <!--<img class="img1" src="https://img.freepik.com/free-photo/front-view-young-lady-holding-her-document_140725-37593.jpg?w=740&t=st=1697260269~exp=1697260869~hmac=370a52bcdecdb9418bb023b2ca80ca37e085f012742c4420ec2065778b9fa24f">-->
      <img class="img1" src="https://img.freepik.com/free-photo/woman-smiling-drawn-graphics_1208-196.jpg?w=740&t=st=1697696550~exp=1697697150~hmac=d2df6348aceae701246ffcad07f697d14a9feef299259f21483e0335dfd179fe">
</div>
<div class="col-md-8">
  <h1>PreDrag Academy</h1>
  <p>Welcome to PreDrag Academy! We're a premier software training center dedicated to cultivating top-tier tech talent. Our aim is to bridge the divide between theory and practical skills, empowering students for success in the fast-evolving tech realm. Join us to unleash your potential and forge a prosperous tech career. Together, let's shape an innovative and knowledgeable future.

</p>

</div>
</div>
</div>

<center>
  <h1>Our Academy</h1>
</center>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <!--<img class="student" src="https://img.freepik.com/free-photo/close-up-students-indoors_23-2148950535.jpg?size=626&ext=jpg&ga=GA1.1.1680537862.1686629565&semt=ais">-->
      <img class="student" src="https://img.freepik.com/premium-photo/sideview-groupmates-looking-camera-during-lesson_7502-1108.jpg?size=626&ext=jpg&ga=GA1.1.1680537862.1686629565&semt=ais">
    </div>
<div class="col-md-4">
      <img class="student" src="https://img.freepik.com/free-photo/creative-learners_1098-13655.jpg?size=626&ext=jpg">
      <!--<img class="student" src="front-view-young-beautiful-lady-red-t-shirt-black-jeans-holding-different-copybooks-files-smiling-with-bag-white_140725-18638.avif">-->
</div>
<div class="col-md-4">
      <img class="student" src="https://img.freepik.com/free-photo/smiling-students-talking-during-lesson_7502-9426.jpg?size=626&ext=jpg&ga=GA1.2.1680537862.1686629565&semt=ais">
</div>
</div>
</div>


<center>
  <h1 class="courses">Our Courses</h1>
</center>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <img class="student" src="https://img.freepik.com/premium-vector/web-development-coding-programming-languages-css-html-js-program-code-screen-laptop_530733-2538.jpg?size=626&ext=jpg&ga=GA1.1.1680537862.1686629565&semt=ais">
      <h3>Fullstack Developer<h3>
    </div>
<div class="col-md-4">
      <img class="student" src="https://img.freepik.com/premium-vector/developer-web-responsive-design_24911-31057.jpg?w=2000">
      <h3>PHP Developer</h3>
</div>
<div class="col-md-4">
      <img class="student" src="https://img.freepik.com/free-vector/web-development-isometric-concept-composition-illustration_1284-55922.jpg?size=626&ext=jpg&ga=GA1.2.1680537862.1686629565&semt=ais">
      <h3>Software Testing</h3>
</div>
</div>
</div>

<center>
  <h1 class="adm">Admission Form</h1>
</center>
<div align="center" class="admission_form">

  <form action="data_check.php" method="POST">

    <div class="adm_int">
      <label class="label_text">Name</label>
      <input class="input_deg" type="text" name="name">
</div>
<div class="adm_int">
      <label class="label_text">Email</label>
      <input class="input_deg" type="text" name="email">
</div>
<div class="adm_int">
      <label class="label_text">Phone</label>
      <input class="input_deg" type="text" name="phone">
</div>
<div class="adm_int">
      <label class="label_text">Address</label>
      <input class="input_deg" type="text" name="address">
</div class="adm_int">
      <div class="adm_int">
    <input class="btn btn-primary" id="submit" type="submit" value="apply" name="apply">
    
</div>
</form>
</div>
<br>





<footer>
  <h3 class="footer_text">footer</h3>
</footer>




  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>