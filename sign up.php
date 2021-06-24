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
    <!--form validation-->
    <script type="text/javascript" src="assets/plugins/jquery.validate/jquery.validate.min.js"></script>
    <!--form validation init-->
    <script src="assets/plugins/jquery.validate/form-validation-init.js"></script>
    <script src="assets/js/app.js"></script>
    <title>MyClassroom</title>

    <style>
        label {
            font-weight: 600;
            color: #555;
        }

        body {
            background-image: url('photos/myimg.png');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            width: 70%;
            padding-bottom: 46px;


        }

        #preview_img {
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php include('include/navbar.php'); ?>
</body>

<body>

    <div class="container">
        <form method="post" action="sign up.php" enctype="multipart/form-data">
            <h2 class="text-center">Join MyClassroom</h2>
            <div class="row jumbotron">
                <div class="col-sm-6 form-group">
                    <label for="name-f">First Name</label>
                    <input type="text" class="form-control" name="fname" id="name-f" placeholder="Enter your first name." required>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="name-l">Last name</label>
                    <input type="text" class="form-control" name="lname" id="name-l" placeholder="Enter your last name." required>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="name-m">Middle name</label>
                    <input type="text" class="form-control" name="mname" id="name-m" placeholder="Enter your middle name." required>
                </div>
                <div class="col-sm-4 form-group">
                    <label for="branch">Branch</label>
                    <select id="branch" name="branch" class="form-control browser-default custom-select">
                        <option value="mechanical Eng.">Mechanical Engineering</option>
                        <option value="electrical Eng.">Electrical Engineering</option>
                        <option value="civil Eng.">Civil Engineering</option>
                        <option value="computer Eng.">Computer Engineering</option>
                        <option value="entc Eng.">Electronics and Telecommunication Engineering</option>
                    </select>
                </div>
                <div class="col-sm-2 form-group">
                    <label for="class">Class</label>
                    <select id="class" name="myclass" class="form-control browser-default custom-select">
                        <option value="FY">FY</option>
                        <option value="SY">SY</option>
                        <option value="TY">TY</option>
                        <option value="FE">FE</option>
                    </select>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email." required>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="address-1">Permanent Address</label>
                    <input type="address" class="form-control" name="address1" id="address-1" placeholder="Locality/House/Street no." required>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="address-2">Current Address</label>
                    <input type="address" class="form-control" name="address2" id="address-2" placeholder="Village/City Name." required>
                </div>


                <div class="col-sm-3 form-group">
                    <label for="Date">Date Of Birth</label>
                    <input type="Date" name="dob" class="form-control" id="Date" placeholder="" required>
                </div>
                <div class="col-sm-2 form-group">
                    <label for="photo"> </label>
                    <div class="col-lg-6">
                        <img id="preview_img" src="assets/img/add_image.png" height="30" width="60" />
                        <input type="hidden" name="size" value="1000000">
                        <input type="file" class="fileinput" name="photo" id="image" accept=" .png, .jpg, .jpeg " required>

                    </div>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="sex">Gender</label>
                    <select id="sex" name="sex" class="form-control browser-default custom-select">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="tel">Mobile Number</label>
                    <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter Your Mobile Number." required>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="pass">Password</label>
                    <input type="Password" name="password" class="form-control" id="pass" placeholder="Enter your password." required>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="pass2">Confirm Password</label>
                    <input type="Password" name="cnf_password" class="form-control" id="pass2" placeholder="Re-enter your password." required>
                </div>
                <div class="col-sm-12">
                    <input type="checkbox" name="condition[]" value="javascript" class="form-check d-inline" id="chb" required><label for="chb" class="form-check-label">&nbsp;I accept all terms and conditions.
                    </label>
                </div>

                <div class="col-sm-12 form-group mb-0">
                    <button class="btn btn-success" type="submit" name="submit">Submit</button>
                </div>

            </div>
        </form>
    </div>


</body>

</html>
<?php
include('include/config.php');
if (isset($_POST['submit'])) {
    extract($_POST);
          $pname=$_FILES['photo']['name'];  
		  $type=$_FILES['photo']['type'];
		  $size=$_FILES['photo']['size'];  
		  $temp=$_FILES['photo']['tmp_name']; 
		  if($pname)
		  {
		  
            $upload= "image/";  
            $imgExt=strtolower(pathinfo($pname, PATHINFO_EXTENSION)); 
            $valid_ext= array('jpg','png','jpeg' );  
            $photo= rand(1000,1000000).".".$imgExt; 
            move_uploaded_file($temp,$upload.$photo);   
		  }


    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $mname = $_POST['mname'];
    $branch = $_POST['branch'];
    $class = $_POST['myclass'];
    $email = $_POST['email'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $dob = $_POST['dob'];
    $sex = $_POST['sex'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cnf_password = $_POST['cnf_password'];
    

    $sql = "insert into `student`(`fname`,`lname`,`mname`,`branch`,`class`,`email`,`address1`,`address2`,`dob`,`photo`,`sex`,`phone`,`password`,`cnf_password`) values ('$fname','$lname','$mname','$branch','$myclass','$email','$address1','$address2','$dob','$photo','$sex','$phone','$password','$cnf_password')";
    $res = mysqli_query($db, $sql) or die(mysqli_error($db));
    if ($res) {
        echo "<script>;";
        echo "window.alert('Data insert successfully....!');";
        echo 'window.location.href = "student_details.php";';
        echo "</script>";
    } else {
        echo "<script>;";
        echo "window.alert('Data error....!');";
        echo "</script>";
    }
}

?>