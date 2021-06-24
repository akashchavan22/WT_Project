<!DOCTYPE html>
<html lang="en">
	<head>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Admina Bootstrap Admin. This is the demo of Admina. You need to purchase a license for legal use!">
		<meta name="author" content="DownTown Themes">

		<link rel="shortcut icon" href="assets/img/icon.png">

		<title>MyClassroom- Student Update  </title>

		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

		<!--Icon fonts css-->
		<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href="assets/plugins/ionicon/css/ionicons.min.css" rel="stylesheet" />

		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/bootstrap-reset.css" rel="stylesheet">

		<!--Animation css-->
		<link href="assets/css/animate.css" rel="stylesheet">

		<!--Morris Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">

		<!-- sweet alerts -->
		<link href="assets/plugins/sweet-alert/sweet-alert.min.css" rel="stylesheet">

		<!-- Custom styles -->
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/helper.css" rel="stylesheet">
		<link href="assets/css/style-responsive.css" rel="stylesheet" />

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->

		
		<style>
        .form_box{width:500px; margin:0 auto; margin-top:10px; margin-bottom: 40px; text-align: left;}
        .fileinput{margin-left:0px;}
        .preview_box{clear: both; padding: 5px; margin-top: 10px; text-align:left;}
        .preview_box img{max-width: 150px; max-height: 150px;}
    </style>

	</head>

	<body>
	<?php
	include('include/config.php');
	if($_GET['stud_id'])
		{
			$update = mysqli_query($db,"select * from student where id='".$_GET['stud_id']."'") or die(mysqli_error($db));
			$row = mysqli_fetch_array($update);
		}
	?>
		<script type="text/javascript">
		    $(document).ready(function(){
		        //Image file input change event
		        $("#image").change(function(){
		            readImageData(this);//Call image read and render function
		           // readImageData Read in an image file from the disk as an array of pixel intensities.
		        });
		    });
		     
		    function readImageData(imgData){
		        if (imgData.files && imgData.files[0]) {
		            var readerObj = new FileReader();
		            
		            readerObj.onload = function (element) { 
		              // set uploaded image data as background of div
		                $('#preview_img').attr('src', element.target.result);
		            }
		            
		            readerObj.readAsDataURL(imgData.files[0]);
		            // Use the JS readAsDataURL() Method You can use the JavaScript readAsDataURL() method of the FileReader object to read the contents of the specified file. When the read operation is finished, the readyState becomes DONE, and the loadend is triggered. The FileReader result property returns the file's contents.
		        }
		    }
		</script> 
		
		
		<!--Main Content -->
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
                    <input type="tel" name="phone" class="form-control" id="tel" placeholder="Enter Your Mobile Number." required>
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

            <!-- Page Content Ends -->
        <!-- Footer -->
            <?php include('include/footer.php'); ?>
            <!-- End Footer -->
		</section>
		 <!-- Basic Plugins -->
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/pace.min.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
        <!--form validation-->
        <script type="text/javascript" src="assets/plugins/jquery.validate/jquery.validate.min.js"></script>

        <!--form validation init-->
        <script src="assets/plugins/jquery.validate/form-validation-init.js"></script>

        <script src="assets/js/app.js"></script>
    </body>
</html>
<?php 
	include('include/config.php');
	if(isset($_POST['submit']))
	{
		extract($_POST);

		  $lang = implode(',' ,$_POST['lang']);

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
	echo	$update = mysqli_query($db,"update registration set
			fname='".$name."',
			lname='".$address."',
			mname='".$contact."',
			branch='".$email."',
			class='".$password."',
			email='".$city."',
			address1='".$gender."',
			address2='".$lang."',
			dob='".$dob."',
			sex='".$sex."',
			phone='".$phone."',
			password='".$password."',
			cnf_password='".$cnf_password."',
			where id='".$_GET['stud_id']."' ") or die (mysqli_error($db));
		
		if($update)
		{
			echo "<script>;";
			echo "window.alert('Data update successfully....!');";
			echo 'window.location.href = "student_detail.php";';
			echo "</script>";
		}
		else
		{
			echo "<script>;";
			echo "window.alert('Data error....!');";
			echo 'window.location.href = "registratiob_update.php";';
			echo "</script>";
		}
	}

 ?>