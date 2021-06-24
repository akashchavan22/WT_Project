<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  <style>
    body {
      background-image: url('photos/myimg.png');
      background-repeat: no-repeat;
      background-size: cover;
    }

    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    button {
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    } 

    button:hover {
      opacity: 0.8;
    }

    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
    }

    img.avatar {
      width: 20%;
      border-radius: 50%;
    }

    .container {
      width: 40%;
      padding-bottom: 16px;
      
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
      display: block;
      float: none;
    }
    .cancelbtn {
      width: 100%;
    }
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <?php include('include/navbar.php'); ?>
</body>

<body>
<h2  class="text-center">MyClassroom Login</h2>

<form method="post" action="login.php" enctype="multipart/form-data">
  <div class="imgcontainer">
    <img src="photos\login.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter Your Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Your Password" name="password" required>
        
    <button class type="submit" name="login">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</body>
</html>
<?php
include('include/config.php');


    if(isset($_POST['login']))
    {
        extract($_POST);

        $email=mysqli_real_escape_string($db,$_POST['email']);
        $password=mysqli_real_escape_string($db,$_POST['password']);
        
        $log=mysqli_query($db,"select * from student where email='$email' and password='$password'") or die (mysqli_error($db));
            
        if(mysqli_num_rows($log)>0)
        {
            $fetch=mysqli_fetch_array($log);
            
            $_SESSION['id']=$fetch['id'];
            $_SESSION['email']=$fetch['email'];
            $_SESSION['password']=$fetch['password'];
            
            
            echo "<script>";
            echo "alert('Login Successfull');";
            echo 'window.location.href="MyClassroom.php";';
            echo "</script>";
        }else
        {
             echo "<script>";
            echo "alert('Login Failed');";
            echo "</script>";
            
        }
        
    }

?>