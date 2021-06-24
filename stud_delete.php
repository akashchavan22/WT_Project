<?php 
	include('include/config.php');
	if (isset($_GET['stud_id'])) 
	{
		$delete = mysqli_query($db,"delete from student where id='".$_GET['stud_id']."'");
			
          if ($delete) 				
		{
			echo "<script>;";
			echo "alert('Registration record delete....!');";
			echo 'window.location.href = "student_details.php";';
			echo "</script>;";
		}
		else
		{
			echo "<script>;";
			echo "alert('registration data error....!');";
			echo 'window.location.href = "student_details.php";';
			echo "</script>;";
		}
	}

 ?>